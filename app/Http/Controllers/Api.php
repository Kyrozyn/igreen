<?php

namespace App\Http\Controllers;

use App\Models\FilePeraturan;
use App\Models\FrontMenu;
use App\Models\JenisFilePeraturan;
use App\Models\LaporanUser;
use App\Models\Menu;
use App\Models\Pelaporan;
use App\Models\User;
use Carbon\PHPStan\AbstractMacro;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Api extends Controller
{
    public function checkAccount(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        //check in database
        $user = User::where('email', $email)->first();
        if ($user) {
            if (password_verify($password, $user->password)) {
                return response()->json(['status' => 200, 'message' => 'Account found', 'user_id' => $user->id, 'user_email' => $email, 'name' => $user->name, 200]);
            } else {
                return response(['status' => 403, 'message' => 'Wrong password'], 403);
            }
        }
        return response(['status' => 404, 'message' => 'Account not found', 'email' => $email], 404);
    }

    public function getFrontMenu()
    {
        $frontmenu = FrontMenu::all();
        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $frontmenu, 200]);
    }

    public function getMenu(Request $request)
    {
        $id = $request->post('frontmenu_id');
        $menu = Menu::whereFrontMenuId($id)->where('parent_menu', null)->get();
        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $menu, 200]);
    }

    public function getChildMenu(Request $request)
    {
        $id = $request->post('parent_id');
        $menu = Menu::whereParentMenu($id)->get();
        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $menu, 200]);
    }

    public function getLaporanMenu(Request $request)
    {
        $id = $request->post('menu_id');
        $laporan = \App\Models\Laporan::whereMenuId($id)->get();
        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $laporan, 200]);
    }

    public function createPelaporan(Request $request)
    {
        try {
            $user_id = $request->post('user_id');
            $pelaporan = new Pelaporan();
            $pelaporan->user_id = $user_id;
            $pelaporan->status_detail = "Sedang direview oleh Manager";
            if($request->exists('tanggal_penyelesaian awal') and $request->exists('tanggal_penyelesaian_akhir')){
                $pelaporan->tanggal_penyelesaian_awal = $request->post('tanggal_penyelesaian_awal');
                $pelaporan->tanggal_penyelesaian_akhir = $request->post('tanggal_penyelesaian_akhir');
            }
            if($request->exists('catatan')){
                $pelaporan->catatan = $request->post('catatan');
            }
            $pelaporan->save();
            return response()->json(['status' => 200, 'message' => 'Success', 'data' => [
                "pelaporan_id" => Pelaporan::latest()->first()->id,
            ], 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => 'Failed', 'data' => [
                "error" => $e->getMessage(),
            ], 500]);
        }
    }

    public function laporanaction(Request $request, $id)
    {
        try {
            $laporan = \App\Models\Laporan::whereId($id)->first();
            if ($laporan) {
                $laporanuser = new LaporanUser();
                /// user, content
                $laporanuser->laporan_id = $id;
                $laporanuser->pelaporan_id = $request->post('pelaporan_id');
                if ($laporan->type == 'image' or $laporan->type == 'video' or $laporan->type == 'imagevideo') {
                    $laporanuser->save();
                    $file = $request->file('file');
                    $laporanuser->addMedia($file)->toMediaCollection('file-' . Carbon::now()->format('Ymd'));
                } else {
                    $laporanuser->content = $request->post('content');
                    $laporanuser->save();
                }
                return response()->json(['message' => 'Success', 'laporan' => $laporan, 'submitted_laporan' => $laporanuser], 200);
            } else {
                return response(['message' => 'Laporan not found'], 404);
            }
        } catch (\Exception $e) {
            return response(['message' => 'Internal Server Error', 'error' => $e->getMessage()], 500);
        }
    }


    public function postLaporan(Request $request)
    {
        $id = $request->post('laporan_id');
        return $this->laporanaction($request, $id);
    }

    public function laporanBatch(Request $request)
    {
        $json = $request->post('data');
        $pelaporan_id = $request->post('pelaporan_id');
        try{
            $data = json_decode($json);
            foreach ($data as $key => $value) {
                    $laporanuser = new LaporanUser();
                    /// user, content
                    $laporanuser->laporan_id = $key;
                    $laporanuser->pelaporan_id = $pelaporan_id;
                        $laporanuser->content = $value;
                        $laporanuser->save();
            }
            return response()->json(['message' => 'Success', 'data' => $data], 200);
        }
        catch (\Exception $e) {
            return response(['message' => 'Internal Server Error', 'error' => $e->getMessage()], 500);
        }
    }

    public function postLaporanFile(Request $request)
    {
        try {
                $laporanuser = Pelaporan::whereId($request->post('pelaporan_id'))->first();
                    $file = $request->file('file');
            $laporanuser->addMedia($file)->toMediaCollection('file');
            $laporanuser->save();
                return response()->json(['message' => 'Success', 'laporan' => $laporanuser, 'submitted_laporan' => $laporanuser], 200);
            }
            catch (\Exception $e) {
                return response(['message' => 'Internal Server Error', 'error' => $e->getMessage()], 500);
        }
    }

    public function getPelaporan(Request $request){
        $pelaporan_id = $request->post('pelaporan_id');
        $laporan = \App\Models\Pelaporan::whereId($pelaporan_id)->first();
        if ($laporan) {
            return response()->json(['message' => 'Success', 'laporan' => $laporan], 200);
        } else {
            return response(['message' => 'Laporan not found'], 404);
        }
    }

    public function getCount(Request $request){
        $user_id = $request->post('user_id');
        $count_diajukan = Pelaporan::where('status', 'Diajukan')->where('user_id',$user_id)->count();
        $count_menunggu_konfirmasi = Pelaporan::where('status', 'Menunggu Konfirmasi')->where('user_id',$user_id)->count();
        $count_revisi = Pelaporan::where('status', 'Revisi')->where('user_id',$user_id)->count();
        $count_selesai = Pelaporan::where('status', 'Selesai')->where('user_id',$user_id)->count();
        return response()->json(['message' => 'Success', "data" => [
            ["name" => "Diajukan","icon" => asset('assets/icon/diajukan.png'),"count" => $count_diajukan],
            ["name" => "Menunggu Konfirmasi","icon" => asset('assets/icon/menunggu_konfirmasi.png'),"count" => $count_menunggu_konfirmasi],
            ["name" => "Revisi","icon" => asset('assets/icon/revisi.png'),"count" => $count_revisi],
            ["name" => "Selesai","icon" => asset('assets/icon/selesai.png'),"count" => $count_selesai],
        ]], 200);
    }

    public function getjenisfileperaturan(){
        $jenis_file = JenisFilePeraturan::all();
        return response()->json(['message' => 'Success', 'jenis_file' => $jenis_file], 200);
    }

    public function getFilePeraturan(Request $request){
        $jenis_id = $request->post('jenis_id');
        $file_peraturan = FilePeraturan::where('jenis_file_peraturan_id', $jenis_id)->get();
        return response()->json(['message' => 'Success', 'file_peraturan' => $file_peraturan], 200);
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\FrontMenu;
use App\Models\LaporanUser;
use App\Models\Menu;
use App\Models\Pelaporan;
use App\Models\User;
use Carbon\PHPStan\AbstractMacro;
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
        DB::beginTransaction();
        try {
            $user_id = $request->post('user_id');
            $pelaporan = new Pelaporan();
            $pelaporan->user_id = $user_id;
            $pelaporan->save();
            return response()->json(['status' => 200, 'message' => 'Success', 'data' => [
                "pelaporan_id" => Pelaporan::latest()->first()->id,
            ], 200]);
        } catch (\Exception $e) {
            DB::rollback();
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
                $laporanuser->user_id = $request->post('user_id');
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
        $this->laporanaction($request, $id);
    }

    public function laporanBatch(Request $request)
    {
        $json = $request->post('data');
        $user_id = $request->post('user_id');
        $pelaporan_id = $request->post('pelaporan_id');
        try{
            $data = json_decode($json);
            foreach ($data["data"] as $key => $value) {
                $laporan = \App\Models\Laporan::whereId($value["laporan_id"])->first();
                if ($laporan) {
                    $laporanuser = new LaporanUser();
                    /// user, content
                    $laporanuser->user_id = $user_id;
                    $laporanuser->pelaporan_id = $pelaporan_id;
                    if ($laporan->type == 'image' or $laporan->type == 'video' or $laporan->type == 'imagevideo') {
                        $laporanuser->save();
                        $file = $value["file"];
                        $laporanuser->addMedia($file)->toMediaCollection('file-' . Carbon::now()->format('Ymd'));
                    } else {
                        $laporanuser->content = $value["content"];
                        $laporanuser->save();
                    }
                }
            }
            return response()->json(['message' => 'Success', 'data' => $data], 200);
        }
        catch (\Exception $e) {
            return response(['message' => 'Internal Server Error', 'error' => $e->getMessage()], 500);
        }
    }

    public function getLaporan(Request $request){
        $laporan_id = $request->post('laporan_id');
        $laporan = \App\Models\Laporan::whereId($laporan_id)->first();
        if ($laporan) {
            return response()->json(['message' => 'Success', 'laporan' => $laporan], 200);
        } else {
            return response(['message' => 'Laporan not found'], 404);
        }
    }
}

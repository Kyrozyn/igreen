<?php

namespace App\Http\Controllers;

use App\Models\FrontMenu;
use App\Models\LaporanUser;
use App\Models\Menu;
use App\Models\User;
use Carbon\PHPStan\AbstractMacro;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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
                return response()->json(['status' => 200, 'message' => 'Account found','user_id' => $user->id,'user_email' => $email,'name' => $user->name, 200]);
            } else {
                return response('',403)->json(['status' => 403, 'message' => 'Wrong password']);
            }
        }
        return response('',404)->json(['status' => 404, 'message' => 'Account not found','email' => $email]);
    }

    public function getFrontMenu(){
        $frontmenu = FrontMenu::all();
        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $frontmenu]);
    }

    public function getMenu(Request $request){
        $id = $request->post('frontmenu_id');
        $menu = Menu::whereFrontMenuId($id)->get();
        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $menu, 200]);
    }

    public function getChildMenu(Request $request){
        $id = $request->post('parent_id');
        $menu = Menu::whereParentMenu($id)->get();
        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $menu, 200]);
    }

    public function getLaporanMenu(Request $request){
        $id = $request->post('menu_id');
        $laporan = \App\Models\Laporan::whereMenuId($id)->get();
        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $laporan, 200]);
    }

    public function postLaporan(Request $request){
        $id = $request->post('laporan_id');
        try {
            $laporan = \App\Models\Laporan::whereId($id)->first();
            if($laporan){
                $laporanuser = new LaporanUser();
                /// user, content
                $laporanuser->user_id = $request->post('user_id');
                if($laporan->type == 'image' or $laporan->type == 'video' or $laporan->type == 'imagevideo'){
                    $laporanuser->save();
                    $file = $request->file('file');
                    $laporanuser->addMedia($file)->toMediaCollection('file-'.Carbon::now()->format('Ymd'));
                }
                else{
                    $laporanuser->content = $request->post('content');
                    $laporanuser->save();
                }
                return response()->json(['status' => 200, 'message' => 'Success', 'laporan' => $laporan,'submitted_laporan' => $laporanuser, 200]);
            }
            else{
                return response('',404)->json(['status' => 404, 'message' => 'Laporan not found']);
            }
        }
        catch (\Exception $e) {
            return response('',500)->json(['status' => 500, 'message' => 'Internal Server Error', 'error' => $e->getMessage()]);
        }


    }
}

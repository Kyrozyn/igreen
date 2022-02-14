<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

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
                return response()->json(['status' => 200, 'message' => 'Account found','email' => $email, 200]);
            } else {
                return response()->json(['status' => 403, 'message' => 'Wrong password', 403]);
            }
        }
        return response()->json(['status' => 404, 'message' => 'Account not found','email' => $email, 404]);
    }

    public function getFrontMenu()
    {
        $menu = Menu::all();
        return response()->json(['status' => 200, 'message' => 'Menu found', 'data' => $menu, 200]);
    }

    public function getMenu(Menu $menu)
    {
        $laporan = \App\Models\Laporan::where('menu_id', $menu->id)->get();
        return response()->json(['status' => 200, 'message' => 'Menu found', 'data' => $menu, 'laporan' => $laporan, 200]);
    }

    public function getLaporan(Laporan $laporan)
    {
        return response()->json(['status' => 200, 'message' => 'Laporan found', 'data' => $laporan, 200]);
    }

    public function getAllLaporanFromMenu($id_menu)
    {
        $laporan = \App\Models\Laporan::where('menu_id', $id_menu)->get();
        return response()->json(['status' => 200, 'message' => 'Laporan found', 'data' => $laporan, 200]);
    }

    public function getAllLaporan()
    {
        $laporan = \App\Models\Laporan::all();
        return response()->json(['status' => 200, 'message' => 'Laporan found', 'data' => $laporan, 200]);
    }

}

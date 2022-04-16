<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use Illuminate\Http\Request;

class Mobile extends Controller
{
    public function login()
    {
        return view('mobile.login');
    }

    public function dashboard()
    {
        $count_diajukan = Pelaporan::where('status', 'Diajukan')->count();
        $count_menunggu_konfirmasi = Pelaporan::where('status', 'Menunggu Konfirmasi')->count();
        $count_revisi = Pelaporan::where('status', 'Revisi')->count();
        $count_selesai = Pelaporan::where('status', 'Selesai')->count();
        return view('mobile.dashboard', compact('count_diajukan', 'count_menunggu_konfirmasi', 'count_revisi', 'count_selesai'));
    }

    public function list_diajukan()
    {
        $data = Pelaporan::where('status', 'Diajukan')->get();
        $title = "Diajukan";
        return view('mobile.list', compact('data', 'title'));
    }

    public function list_menunggu_konfirmasi()
    {
        $data = Pelaporan::where('status', 'Menunggu Konfirmasi')->get();
        $title = "Menunggu Konfirmasi";
        return view('mobile.list', compact('data', 'title'));
    }

    public function list_revisi()
    {
        $data = Pelaporan::where('status', 'Revisi')->get();
        $title = "Revisi";
        return view('mobile.list', compact('data', 'title'));
    }

    public function list_selesai()
    {
        $data = Pelaporan::where('status', 'Selesai')->get();
        $title = "Selesai";
        return view('mobile.list', compact('data', 'title'));
    }
}

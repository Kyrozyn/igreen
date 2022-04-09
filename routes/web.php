<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


include __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[\App\Http\Controllers\Dashboard::class,'dashboard'])->name("dashboard");
//Route::get('/dashboard/menu/add/{origin}/{frontmenu_id}/{id}',\App\Http\Livewire\FormMenu::class);
//Route::get('/dashboard/menu/{origin}/{id}',\App\Http\Livewire\TableMenu::class);

    Route::get('/dashboard/laporan/add/{menu_id}',\App\Http\Livewire\Laporan\Form::class);
    Route::get('/dashboard/laporan/{menu_id}',\App\Http\Livewire\Laporan\Table::class);

    Route::get('/dashboard/frontmenu/',\App\Http\Livewire\FrontMenu\Table::class);
    Route::get('/dashboard/frontmenu/add',\App\Http\Livewire\FrontMenu\Form::class);

    Route::get('/dashboard/fileperaturan',\App\Http\Livewire\FilePeraturan\Table::class);
    Route::get('/dashboard/fileperaturan/add',\App\Http\Livewire\FilePeraturan\Form::class);
});

//api
Route::post('/login',[\App\Http\Controllers\Api::class,'checkAccount']);
Route::get('/getfrontmenu',[\App\Http\Controllers\Api::class,'getFrontMenu']);
Route::post('/getmenu',[\App\Http\Controllers\Api::class,'getMenu']);
Route::post('/getchildmenu',[\App\Http\Controllers\Api::class,'getChildMenu']);
Route::post('/getlaporanmenu',[\App\Http\Controllers\Api::class,'getLaporanMenu']);
Route::post('/postLaporan',[\App\Http\Controllers\Api::class,'postLaporan']);
Route::post('/createPelaporan',[\App\Http\Controllers\Api::class,'createPelaporan']);
Route::post('/laporanBatch',[\App\Http\Controllers\Api::class,'laporanBatch']);
Route::post('/getLaporan',[\App\Http\Controllers\Api::class,'getLaporan']);

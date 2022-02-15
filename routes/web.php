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

Route::post('/login',[\App\Http\Controllers\Api::class,'checkAccount']);
Route::get('/frontmenu',[\App\Http\Controllers\Api::class,'getFrontMenu']);
Route::get('/frontmenu/$1',[\App\Http\Controllers\Api::class,'getMenu']);

Route::get('/dashboard',[\App\Http\Controllers\Dashboard::class,'dashboard']);
Route::get('/dashboard/menu/add',\App\Http\Livewire\FormMenu::class);
Route::get('/dashboard/menu/',\App\Http\Livewire\TableMenu::class);

Route::get('/dashboard/laporan/add',\App\Http\Livewire\Laporan\Form::class);
Route::get('/dashboard/laporan/',\App\Http\Livewire\Laporan\Table::class);

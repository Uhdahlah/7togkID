<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/minecraft', function () {return view('page.mc');})->name('minecraft');
Route::get('/wa', function () {return redirect('https://chat.whatsapp.com/IWfQl4h0Wc8DeiA3FBkaaw');})->name('wa');
Route::get('/discord', function () {return redirect('https://discord.com/invite/U8qAZ82uag');})->name('dc');
Route::get('/vote', function () {return redirect('https://minecraftpocket-servers.com/server/111760/vote');})->name('vote');
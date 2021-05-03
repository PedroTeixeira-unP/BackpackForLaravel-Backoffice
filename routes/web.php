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
    $banners =  DB::table('Banners')->select('id','texto1','texto2','link','botao')->get();
    $users = DB::table('Tags')->select('name')->get();
    $lista = DB::table('listapacotes')->select('pacote_id','oferta')->get();
    $vipI = DB::table('pacotevip')->select('nome','Tipo','Valor')->where('Tipo','Individuais')->get();
    $vipO = DB::table('pacotevip')->select('nome','Tipo','Valor')->where('Tipo','Organizações')->get();
    return view('welcome', compact('users','vipI','vipO','lista','banners'));
});

Route::get('/Vips', function () {
    $users = DB::table('Tags')->select('name')->get();
    $lista = DB::table('listapacotes')->select('pacote_id','oferta')->get();
    $vip = DB::table('pacotevip')->select('id','nome','Tipo','Valor')->get();
    $vipI = DB::table('pacotevip')->select('nome','Tipo','Valor')->where('Tipo','Individuais')->get();
    $vipO = DB::table('pacotevip')->select('nome','Tipo','Valor')->where('Tipo','Organizações')->get();
    return view('vips', compact('users','vip','vipI','vipO','lista'));
});
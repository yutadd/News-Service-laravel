<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('/', function () {
    return view('top');
});
Route::get('/top', function () {
    return view('top');
});
Route::get('/live', function () {
    return view('live');
});

Route::get('/travel', function () {
    return view('travel');
});
Route::get('/otoi', function () {
    return view('otoi');
});
Route::post('/result', function () {
    DB::insert("insert into otoiawase.table(otoi,name,kaisya,phone,mail,IP) values(?,?,?,?,?,?)",[$_POST['otoi'],$_POST['name'],$_POST['kaisya'],$_POST['phone'],$_POST['mail'],$_SERVER['REMOTE_ADDR']]);
    return view('result');
});
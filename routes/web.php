<?php

use Illuminate\Encryption\Encrypter;
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
    $key = 'base64:'.base64_encode(
            Encrypter::generateKey(config('app.cipher'))
        );

    return view('welcome')->with(compact('key'));
});

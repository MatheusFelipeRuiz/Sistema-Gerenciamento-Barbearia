<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Mail\MensagemMail;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
})->name('home');

Route::resources([
    'users'    => UserController::class,
    'services' => ServiceController::class
]);

Auth::routes(['verify' => true]);

Route::get('/mail', function () {
    return new MensagemMail();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')
->middleware('verified')
;
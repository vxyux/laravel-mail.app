<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmailSenderController;

use App\Http\Controllers\InboxController;

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
    return view('email');
    })->name('home');


Route::post('send/reply', [EmailSenderController::class, 'reply']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/inbox', [InboxController::class, 'index']);
Route::resource('inbox', 'InboxController');

Route::get('/inbox/email', [InboxController::class, 'show']);
Route::resource('inbox/email', 'InboxController');

Route::get('/contact', [EmailSenderController::class, 'index'])
    ->name('contact');

Route::post('send/mail', [EmailSenderController::class, 'send']);

//Route::get('/inbox', [InboxController::class, 'index'])
//    ->name('inbox');

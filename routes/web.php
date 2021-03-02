<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('users', [UserController::class, 'show'])->name('users');

Route::get('event', [EventController::class, 'show'])->name('event');
Route::post('delete/{$id}', [UserController::class, 'destroy'])->name('delete');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar');

Route::get('index', [EventController::class, 'index'])->name('allEvents');

Route::post('store', [EventController::class, 'store'])->name('eventStore');


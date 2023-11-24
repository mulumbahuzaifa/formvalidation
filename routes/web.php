<?php

use App\Http\Controllers\ClientController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(ClientController::class)->group(function(){
    Route::get('/', 'index');
    Route::post('/', 'post');
    Route::post('/update', 'update')->name('update');
    Route::get('/create', 'create');
    Route::get('/reload-captcha', 'reloadCaptcha');
    // Route::get('/edit/{id}', 'edit');
    // Route::get('/delete/{id}', 'delete');
    // Route::get('/show/{id}', 'show');
    Route::post('/create', 'store')->name('store');
    // Route::post('/update/{id}', 'update');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

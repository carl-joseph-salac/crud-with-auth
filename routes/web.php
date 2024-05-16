<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;

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


Route::controller(AuthController::class)->group(function(){
    Route::get('/', 'showLogin')->name('showLogin');
    Route::post('/login-user', 'loginUser')->name('loginUser');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth.user');
    Route::get('/register', 'showRegister')->name('showRegister');
    Route::post('/register-user', 'registerUser')->name('registerUser');
});

Route::controller(CrudController::class)->group(function(){
    Route::middleware(['auth.user'])->group(function(){
        Route::get('/home', 'showHome')->name('showHome');
        Route::get('/show-create', 'showCreate')->name('showCreate');
        Route::post('/create', 'createInfo')->name('createInfo');
        Route::get('/{info}/edit', 'showEdit')->name('showEdit');
        Route::put('/{info}/update', 'editInfo')->name('editInfo');
        Route::delete('{info}/delete', 'deleteInfo')->name('deleteInfo');
    });
});

Route::get('tailwind', function(){
    return view('tailwind');
});




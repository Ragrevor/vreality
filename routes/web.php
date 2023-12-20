<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AdminController;

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
    return view('index');
});



Route::get('/auth', [AuthController::class, 'auth']);

Route::post('/auth_user', [AuthController::class, 'auth_user']);

Route::get('/reg', [AuthController::class, 'reg']);

Route::post('/reg_user', [AuthController::class, 'reg_user']);

Route::get('/exit', [AuthController::class, 'exit']);



Route::get('/halls', function () {
    return view('halls');
});

Route::get('/games', function () {
    return view('games');
});

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/reg', function () {
    return view('reg');
});

Route::get('/index', function () {
    return view('admin.index');
});

Route::get('/gamesEdit', function () {
    return view('admin.gamesEdit');
});

Route::get('/games',[GameController::class,'games']);

Route::post('/game_create', [AdminController::class, 'game_create']);

Route::get("/admin/{id}/gamesEdit",[AdminController::class, "gamesEdit"]);

Route::get("admin/{id}/gamesEdit",[AdminController::class, "gamesEdit"]);



// Route::patch('/{id}/update', [AdminController::class, 'update'])->name('update.r');

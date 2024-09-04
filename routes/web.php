<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Grupo de rotas protegidas pelo middleware 'auth:sanctum'
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/index', [MemberController::class, 'index']);

    Route::get('/createmember', function () {
        return view('createmember');
    });

    Route::post('/members/add', [MemberController::class, 'store']);

    Route::delete('/{id}/delete', [MemberController::class, 'destroy']);

    Route::get('/{id}/edit', [MemberController::class, 'edit']);

    Route::post('/{id}/update', [MemberController::class, 'update']);

    Route::get('/logout', [UserController::class, 'logout']);
    
    Route::get('/about', function () {
        return view('about');
    });
});

// Rotas de login e registro que não exigem autenticação
Route::view('/register', "register")->name('register');
Route::post('/validate-register', [UserController::class, 'register']);
Route::view('/login', "login")->name('login');
Route::view('/', "login");
Route::post('/login', [UserController::class, 'login']);
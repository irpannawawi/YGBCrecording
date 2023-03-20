<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
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
    if(Auth::user() == null){
        return redirect('login');
    }
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login_page'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/act_login', [AuthController::class, 'login']);


Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', [DashboardController::class, 'index']);

    // ADMIN -> USER MANAGEMENT
    Route::controller(UserController::class)->group(function(){
        Route::get('users', 'show')->name('pengguna');
    });

    // ADMIN -> USER MANAGEMENT
    Route::controller(UserController::class)->group(function(){
        Route::get('users', 'show')->name('pengguna');
    });
});
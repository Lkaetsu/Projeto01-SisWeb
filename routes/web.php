<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\User_CursoController;
use App\Models\Curso;
use App\Models\Professor;
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

Route::get('/', [CursoController::class,'index']);
Route::get('curso/{curso}', [CursoController::class,'show']);
Route::post('curso/{curso}', [User_CursoController::class,'add'])->name('add');

Route::get('/register', [RegisterController::class,'create'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store'])->middleware('guest');

Route::get('/login',[SessionController::class,'create'])->middleware('guest');
Route::post('/login',[SessionController::class,'store'])->middleware('guest');
Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');

//Route::post('/add',[User_CursoController::class,'add'])->middleware('auth');
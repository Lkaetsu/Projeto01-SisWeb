<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\DocenteCursoController;
use App\Http\Controllers\DocenteProfessorController;
use App\Http\Controllers\DocenteAlunoController;
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
Route::post('curso/{curso}/close', [CursoController::class,'close'])->name('close')->middleware('sec');

Route::post('curso/{curso}/add', [UserController::class,'add'])->name('add')->middleware('auth');


Route::get('/register', [RegisterController::class,'create'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store'])->middleware('guest');

Route::get('/update', [UpdateController::class,'create'])->middleware('auth');
Route::post('/update', [UpdateController::class,'store'])->middleware('auth');

Route::get('/login',[SessionController::class,'create'])->middleware('guest');
Route::post('/login',[SessionController::class,'store'])->middleware('guest');
Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');

Route::get('/{curso}/alunos', [AlunosController::class,'show'])->middleware('prof');
Route::post('/{curso}/alunos/{aluno}', [AlunosController::class,'assign'])->name('assign')->middleware('prof');

Route::post('/docente/alunos/',[DocenteAlunoController::class,'store'])->middleware('sec');
Route::get('/docente/alunos/register',[DocenteAlunoController::class,'register'])->middleware('sec');

Route::get('/docente/alunos/index',[DocenteAlunoController::class,'index'])->middleware('sec');
Route::get('/docente/alunos/{user}/edit',[DocenteAlunoController::class,'edit'])->middleware('sec');
Route::get('/docente/alunos/{user}/assign',[DocenteAlunoController::class,'assign'])->middleware('sec');
Route::patch('/docente/alunos/{user}',[DocenteAlunoController::class,'update'])->name('update.aluno')->middleware('sec');
Route::post('/docente/alunos/{user}/assign',[DocenteAlunoController::class,'storeassign'])->name('assign.aluno')->middleware('sec');
Route::delete('/docente/alunos/{user}',[DocenteAlunoController::class,'destroy'])->middleware('sec');

Route::post('/docente/cursos/',[DocenteCursoController::class,'store'])->middleware('sec');
Route::get('/docente/cursos/create',[DocenteCursoController::class,'create'])->middleware('sec');

Route::get('/docente/cursos/',[DocenteCursoController::class,'index'])->middleware('sec');
Route::get('/docente/cursos/{curso}/edit',[DocenteCursoController::class,'edit'])->middleware('sec');
Route::patch('/docente/cursos/{curso}',[DocenteCursoController::class,'update'])->name('update.curso')->middleware('sec');
Route::delete('/docente/cursos/{curso}',[DocenteCursoController::class,'destroy'])->middleware('sec');

Route::post('/docente/professors/',[DocenteProfessorController::class,'store'])->middleware('sec');
Route::get('/docente/professors/register',[DocenteProfessorController::class,'register'])->middleware('sec');

Route::get('/docente/professors/',[DocenteProfessorController::class,'index'])->middleware('sec');
Route::get('/docente/professors/{professor}/edit',[DocenteProfessorController::class,'edit'])->middleware('sec');
Route::patch('/docente/professors/{professor}',[DocenteProfessorController::class,'update'])->name('update.professor')->middleware('sec');
Route::delete('/docente/professors/{professor}',[DocenteProfessorController::class,'destroy'])->middleware('sec');
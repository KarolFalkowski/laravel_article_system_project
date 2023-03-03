<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
    return view('home');
});


Route::get('/article/list', [ArticleController::class,'index']);
Route::get('/article/add', [ArticleController::class,'create']); 
Route::post('/article/save', [ArticleController::class,'store']);
Route::get('/article/edit/{id}', [ArticleController::class,'edit']);
Route::post('/article/update/{id}', [ArticleController::class,'update']);



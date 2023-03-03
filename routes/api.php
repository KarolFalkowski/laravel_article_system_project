<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/article/list', [ArticleApiController::class,'ListArticle']);
Route::post('/article/new', [ArticleApiController::class,'NewArticle']);
Route::put('/article/update/{id}', [ArticleApiController::class,'UpdateArticle']);
Route::get('/article/findbyid/{id}', [ArticleApiController::class,'FindArticleById']);
Route::get('/article/findbyauthorid/{author_id}', [ArticleApiController::class,'FindArticleByAuthorId']);
Route::get('/article/gettop3', [ArticleApiController::class,'GetTop3']);

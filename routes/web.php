<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;

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
    return view('welcome',[
        "active" => 'home'
    ]);
});

Route::get('/formulir', [FormController::class, 'form']);
Route::post('/proses', [FormController::class, 'proses']);

Route::get("/article", [ArticleController::class, 'index']);

Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

Route::get('/categories', function(){
    return view('categories', [
        'categories' => Category::all(),
        "active" => 'categories',
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

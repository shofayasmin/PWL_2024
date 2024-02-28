<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

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
    return view('welcome');
});

Route::get('/hello', function () {
    return ('Hello World');
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/salam', function () {
    return 'Welcome';
});

Route::get('/biodata', function () {
    return 'NIM: 2241720108 <br> name: shofa yasmin fauziah';
});     

Route::get('/user/{name}', function ($name) {
    return 'My name is  '. $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
    return 'Pos ke-'. $postId." Komentar ke-".$commentId;
});

Route::get('/articles/{id}', function ($articlesId) {
    return 'Article Page with ID '. $articlesId;
});


Route::get('/user/{name?}', function ($name=null) {
    return 'My name is '. $name;
});

Route::get('/user/{name?}', function ($name="John") {
    return 'My name is '. $name;
});


Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles', [PageController::class,'articles']);

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles', [ArticleController::class,'articles']);

Route::resource('/photos', PhotoController::class);

Route::resource('/photos', PhotoController::class)->only([
    'index','show'
]);
Route::resource('/photos', PhotoController::class)->only([
    'create','store', 'update', 'destroy'
]);


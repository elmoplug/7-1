<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  
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

//use App\Http\Controllers\PostController;

/*Route::get('/', function () {
    return view('welcome');
});
*/


//http://~/postsのURLが来たらPostControllerのindexを実行
Route::get('/', [PostController::class, 'index']);

//8-2 Bladeファイル表示
/*Route::get('/', function() {
    return view('posts.index');
});
*/
Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class ,'show']);

Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);


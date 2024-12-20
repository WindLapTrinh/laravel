<?php
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CustomerSenMailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Models\Post;
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

Route::get("/post", [PostController::class, "get"]);

// Send mail 
Route::get("sendmail/customer", [CustomerSenMailController::class, "sendMail"]);

// Tiny Cloud 
Route::get("test/tiny",[PostController::class, "add"]);

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
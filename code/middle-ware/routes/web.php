<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('admin/{age}', function () {
//     return view("admin");
// })->middleware("CheckAge");

// Route::get("/admin/{age}", [AdminController::class, "show"]);

// Route::get("/admin/add/{age}",[AdminController::class, "add"]);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get("admin/dashboard", [AdminController::class, "dashboard"])->middleware("CheckRole:user");


// group middleware
Route::middleware('auth')->group(function(){
    Route::get("admin/dashboard", [AdminController::class, "dashboard"]);
});




<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

use App\Http\Controllers\homeController;

use App\Http\Controllers\adminController;

use App\Http\Controllers\FileUploadController;


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

Route::get('user/home', [homeController::class, 'index'])->middleware('auth');
Route::get('home', [homeController::class, 'home']);

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/admin', [adminController::class, 'index'])->middleware('auth', 'isAdmin');

Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

Route::get('/file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('/file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');

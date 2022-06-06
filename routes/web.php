<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

use App\Http\Controllers\homeController;
use App\Http\Controllers\courseListController;

use App\Http\Controllers\adminController;

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FileViewerController;


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

/* laravel */
Route::get('/', function () {
    return view('welcome');
});

/* user page */
Route::get('user/home', [homeController::class, 'index'])->middleware('auth');

/* public page */
Route::get('home', [homeController::class, 'home']);
Route::get('courseList', [courseListController::class, 'index']);

/* login page */
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

/* admin page */
Route::get('/admin', [adminController::class, 'index'])->middleware('auth', 'isAdmin');

/* course */
Route::get('/admin-course', [adminController::class, 'course'])->middleware('auth', 'isAdmin');
Route::delete('/admin-course/{id}', [adminController::class, 'deleteCourse']);
Route::get('/admin-course/edit/{id}', [adminController::class, 'mengubah'])->middleware('auth', 'isAdmin');
Route::post('/admin-course/{id}', [adminController::class, 'ubahdata']);

/* register page */
Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

/* test pdf up and view */
Route::get('/file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('/file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');
Route::get('/file-viewer', [FileViewerController::class, 'index']);

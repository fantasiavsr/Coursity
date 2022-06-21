<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

use App\Http\Controllers\homeController;
use App\Http\Controllers\courseListController;
use App\Http\Controllers\courseController;

use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;

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
Route::get('userhome', [homeController::class, 'index'])->middleware('auth');
Route::get('usercourselist', [courseListController::class, 'user'])->middleware('auth');
Route::get('/usercoursedetail/{course}', [courseController::class, 'usercoursedetail'])->name('usercoursedetail');
Route::post('/user-enroll', [userController::class, 'enroll']);
Route::get('/user-mycourse', [userController::class, 'mycourse'])->name('user-mycourse');
Route::post('/user-markcompleted', [userController::class, 'markcompleted']);
Route::delete('/user-markincomplete', [userController::class, 'markincomplete'])->name('user-markincomplete');

/* public page */
Route::get('home', [homeController::class, 'home'])->middleware('guest');
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
Route::get('/admin-course/edit/{id}', [adminController::class, 'mengubahCourse'])->middleware('auth', 'isAdmin');
Route::post('/admin-course/{id}', [adminController::class, 'ubahdataCourse']);
Route::get('/admin-createcourse', [adminController::class, 'createCourse']);
Route::post('/admin-createcourse', [adminController::class, 'storeCourse']);

Route::get('/admin-module', [adminController::class, 'module'])->middleware('auth', 'isAdmin');
Route::delete('/admin-module/{id}', [adminController::class, 'deleteModule']);
Route::get('/admin-module/edit/{id}', [adminController::class, 'mengubahModule'])->middleware('auth', 'isAdmin');
Route::post('/admin-module/{id}', [adminController::class, 'ubahdataModule']);
Route::get('/admin-createmodule', [adminController::class, 'createModule']);
Route::post('/admin-createmodule', [adminController::class, 'storeModule']);

/* user */
Route::get('/admin-user', [adminController::class, 'userlist'])->middleware('auth', 'isAdmin');
Route::delete('/admin-user/{id}', [adminController::class, 'deleteUser']);
Route::get('/admin-user/edit/{id}', [adminController::class, 'mengubahUser'])->middleware('auth', 'isAdmin');
Route::post('/admin-user/{id}', [adminController::class, 'ubahdataUser']);
Route::get('/admin-createuser', [adminController::class, 'createUser']);
Route::post('/admin-createuser', [adminController::class, 'storeUser']);

/* register page */
Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

/* test pdf up and view */
Route::get('/file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('/file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');
Route::get('/file-viewer', [FileViewerController::class, 'index']);
Route::get('/video-viewer', [FileViewerController::class, 'indexvideo']);

/* course detail test */
/* Route::get('/coursedetailtest', [courseController::class, 'index']); */
Route::get('/coursedetail/{course}', [courseController::class, 'coursedetail'])->name('coursedetail');

/* test learn course */
Route::get('/courseviewtest', [courseController::class, 'courseviewtest'])->name('courseviewtest');
/* realization */
Route::get('/courseview/{course}', [courseController::class, 'courseview'])->name('courseview');

/* next module test */
Route::get('/courseviewnext/{course}/{step}', [courseController::class, 'courseviewnext'])->name('courseviewnext');

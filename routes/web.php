<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers ; 
use App\Http\Controllers\CategoryController ;
use App\Http\Controllers\CoursesViewController ;

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

Auth::routes();

Route::prefix('myspace/courses')->group(function () {
    Route::get('/',[App\Http\Controllers\CoursesViewController::class, 'index'] );
    Route::get('/create_cat',[App\Http\Controllers\CategoryController::class, 'create']); 
    Route::get('/course/create/{id}',[App\Http\Controllers\CourseController::class, 'create']) ; 
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/myspace/courses/cat',App\Http\Controllers\CategoryController::class); 
Route::resource('/myspace/courses/course', App\Http\Controllers\CourseController::class); 

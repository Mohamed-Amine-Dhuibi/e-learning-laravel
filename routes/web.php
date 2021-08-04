<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers ; 
use App\Http\Controllers\CategoryController ;
use App\Http\Controllers\CoursesViewController ;
use App\Http\Controllers\EnrolementController ;
use App\Http\Controllers\CoursesSubscriptionsViewController ;


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
//all enrolments 
Route::get('/myspace/enrolments', [App\Http\Controllers\CoursesSubscriptionsViewController::class, 'index']);
//approve enrolement
Route::get('/myspace/courses/enrolments/{id}/approve',[App\Http\Controllers\CoursesSubscriptionsViewController::class, 'approve']) ; 
//cancel enrolment
Route::get('/myspace/courses/enrolments/{id}/cancel',[App\Http\Controllers\CoursesSubscriptionsViewController::class, 'cancel']) ; 
//courses  + categories managment 
Route::prefix('myspace/courses')->group(function () {
    Route::get('/',[App\Http\Controllers\CoursesViewController::class, 'index'] );
    Route::get('/create_cat',[App\Http\Controllers\CategoryController::class, 'create']); 
    Route::get('/course/create/{id}',[App\Http\Controllers\CourseController::class, 'create']) ; 
});
//get enrolement 
Route::get('course/enrol/create/{course_id}', [
    'as' => 'enrol.create',
    'uses' => 'App\Http\Controllers\EnrolementController@create',
]);
//enrolement resource controller  
Route::resource('/course/enrol', EnrolementController::class,['except' => 'create']);
//home page : courses with categories
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//category resource
Route::resource('/myspace/courses/cat',App\Http\Controllers\CategoryController::class); 
//courses resource
Route::resource('/myspace/courses/course', App\Http\Controllers\CourseController::class); 
//course view controller
route::get('/course/{course}',[App\Http\Controllers\UserCoursesViewController::class, 'index']) ; 
//enrolments per course 
Route::get('/myspace/courses/enrolments/{course}',[App\Http\Controllers\CoursesSubscriptionsViewController::class, 'course_enrolment']);
//admin users view controller
Route::get('/myspace/users',[App\Http\Controllers\UsersViewController::class, 'all']) ; 
//users profiles 
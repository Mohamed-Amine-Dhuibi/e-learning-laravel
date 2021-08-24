<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers ; 
use App\Http\Controllers\CategoryController ;
use App\Http\Controllers\CoursesViewController ;
use App\Http\Controllers\EnrolementController ;
use App\Http\Controllers\EventController ;
use App\Http\Controllers\ChapterController ;
use App\Http\Controllers\DashboardController ;
use App\Http\Controllers\CoursesSubscriptionsViewController ;
use app\Models\User  ;


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

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'] );

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


/* enable mail verification
Auth::routes(['verify' => true]); */
//all enrolments 
Route::get('/myspace/enrolments', [App\Http\Controllers\CoursesSubscriptionsViewController::class, 'index'])->middleware('can:isAdmin');
//approve enrolement
Route::get('/myspace/courses/enrolments/{id}/approve',[App\Http\Controllers\CoursesSubscriptionsViewController::class, 'approve'])->middleware('can:isAdmin') ; 
//cancel enrolment
Route::get('/myspace/courses/enrolments/{id}/cancel',[App\Http\Controllers\CoursesSubscriptionsViewController::class, 'cancel'])->middleware('can:isAdmin') ; 
//delete enrolment 
Route::get('/myspace/courses/enrolments/{id}/delete',[App\Http\Controllers\CoursesSubscriptionsViewController::class, 'delete'])->middleware('can:isAdmin') ; 
//courses  + categories managment 
Route::prefix('myspace/courses')->group(function () {      
            Route::get('/',[App\Http\Controllers\CoursesViewController::class, 'index'] )->middleware('can:isAdmin');
            Route::get('/create_cat',[App\Http\Controllers\CategoryController::class, 'create'])->middleware('can:isAdmin'); 
            Route::get('/course/create/{id}',[App\Http\Controllers\CourseController::class, 'create'])->middleware('can:isAdmin'); 
            Route::get('/course/delete/{id}',[App\Http\Controllers\CoursesViewController::class, 'delete'])->middleware('can:isAdmin'); 
});
//get enrolement 
Route::get('course/enrol/create/{course_id}', [
    'as' => 'enrol.create',
    'uses' => 'App\Http\Controllers\EnrolementController@create',
]);
//enrolement resource controller  
Route::resource('/course/enrol', EnrolementController::class,['except' => 'create']);
//home page : courses with categories
Route::get('/courses', [App\Http\Controllers\UserCoursesViewController::class, 'index'])->name('courses');
//category resource
Route::resource('/myspace/courses/cat',App\Http\Controllers\CategoryController::class)->middleware('can:isAdmin'); 
//courses resource
Route::resource('/myspace/courses/course', App\Http\Controllers\CourseController::class);
//course view controller
route::get('/course/{course}',[App\Http\Controllers\UserCoursesViewController::class, 'show']) ; 
//enrolments per course 
Route::get('/myspace/courses/enrolments/{course}',[App\Http\Controllers\CoursesSubscriptionsViewController::class, 'course_enrolment'])->middleware('can:isAdmin');
///admin users view controller
Route::get('/myspace/users',[App\Http\Controllers\UsersViewController::class, 'all'])->middleware('can:isAdmin') ; 
//delete selection
Route::get('/myspace/delete/users', [App\Http\Controllers\UsersViewController::class, 'deleteChecked']);
//users profiles
//show profile
Route::get('/myspace/users/profile/{id}',[App\Http\Controllers\UsersViewController::class, 'profile'])->middleware('can:isAdmin'); 
//edit
Route::get('/myspace/users/{id}/edit',[App\Http\Controllers\UsersViewController::class, 'edit_user'])->middleware('can:isAdmin');
//delete
Route::get('/myspace/users/{id}/delete',[App\Http\Controllers\UsersViewController::class, 'delete_user'])->middleware('can:isAdmin');
//admin dashboard
Route::get('/myspace/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->middleware('can:isAdmin');
//Route::get('/myspace',[App\Http\Controllers\UserSpaceController::class, 'index']);

//admin users type
Route::prefix('/myspace/users')->group(function () {
    Route::get('/{type}', [App\Http\Controllers\UsersViewController::class,'type']);
});
//events 
Route::resource('/myspace/events', EventController::class);
//event enrollement
Route::get('/event/enrol/create/{id}', [App\Http\Controllers\EnrolementController::class,'event_enroll']);
//event enrol confirmation 
Route::get('/event/enrol/{id}/confirm', [App\Http\Controllers\EnrolementController::class,'confirm_event']);
//search admin 
route::get('/myspace/search/',[App\Http\Controllers\DashboardController::class,'search']) ;
//user space
route::get('/myspace',[App\Http\Controllers\UserSpaceController::class,'index']) ;
//class 
Route::prefix('/myspace/class')->group(function(){
    
    Route::get('/{id}',[App\Http\Controllers\ClassController::class,'index'])   ;
});
Route::resource('/myspace/class/', ChapterController::class);
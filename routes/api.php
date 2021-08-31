<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController ;
use App\Http\Controllers\ApiAuthController ;
use App\Http\Controllers\ApiDataController ;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//api login protected routes
Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::Post('/user/enrolments',[ApiDataController::class,'UserCourses']);
    Route::Post('/logout',[ApiAuthController::class,'logout']);
    Route::Post('/user',[ApiDataController::class,'user']);
    Route::Post('/course',[ApiDataController::class,'course_chapters']) ; 
});

Route::POST('/register',[ApiAuthController::class,'register']) ;
Route::POST('/login',[ApiAuthController::class,'login']) ;
Route::POST('/courses',[ApiDataController::class,'courses']) ;
Route::POST('/categories',[ApiDataController::class,'categories']) ;






/* Route::group(['middleware'=>'auth:sanctum'],function () {
    Route::POST('/register',[ApiAuthController::class,'register']) ;
}); 
*/
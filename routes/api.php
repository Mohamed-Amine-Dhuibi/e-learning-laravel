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
    /**
     * user enrolled courses and events 
     * method Post
     * header --> contains valid access token 
     */
    Route::Post('/user/enrolments',[ApiDataController::class,'UserCourses']);
    /**
     * user logout 
     * success status 200 , returns 'logged out' 
     * header --> contains valid access token 
     */
    Route::Post('/logout',[ApiAuthController::class,'logout']);
    /**
     * return user info
     * header --> contains valid access token 
     */
    Route::GET('/user',[ApiDataController::class,'user']);
    /**
     * return course chapters (videos & infos)
     * method Post
     * fields : 'course' : 'course_id'
     */
    Route::Post('/course',[ApiDataController::class,'course_chapters']) ; 
});
/**registering users
* method Post  
* fileds : name , email , phoen_number, password, password_confirmation 
*/ 
Route::POST('/register',[ApiAuthController::class,'register']) ;
/** loging in users 
 * method POSt
 * fields email ,password
 * 
*/
Route::POST('/login',[ApiAuthController::class,'login']) ;
/**Veiw courses
 * method post
 * url:/courses : fields :- 'category' : 'category_id' return specified category courses 
 *                        - none => returning all courses
 */
Route::POST('/courses',[ApiDataController::class,'courses']) ;
/**Categories
 * returning all categories
 */
Route::GET('/categories',[ApiDataController::class,'categories']) ;
/**
 * search
 * 
 */

/**
 *subscriptions 
 */
/**
 * wishlist 
 */



/*
 Route::group(['middleware'=>'auth:sanctum'],function () {
    Route::POST('/register',[ApiAuthController::class,'register']) ;
}); 
*/
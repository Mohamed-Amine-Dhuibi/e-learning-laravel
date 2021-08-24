<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course ; 
use App\Models\User ; 
use App\Models\Enrolement ; 
use Illuminate\Support\Collection;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index(){
        $cn =Course::count() ;
        $total = DashboardController::revenue() ; 
        $users_count = DashboardController::users() ; 
        $enrolements_count = Enrolement::count() ; 
        $daily_sales = DashboardController::daily_sales() ;
        $daily_subs = DashboardController::daily_subs() ;
        $daily_enrolments = DashboardController::daily_enrolments() ;
        $data = ['courses_number'=>$cn,
                 'total'=>$total,
                 'users_count'=>$users_count,
                 'subs'=>$enrolements_count,
                 'chart1'=>collect($daily_sales) , 
                 'chart2'=>collect($daily_subs) , 
                 'chart3'=>collect($daily_enrolments),
    ];
        return view('admin.dashboard.dashboard')->with($data);

    }
    public function revenue(){
        $total=0 ; 
        $enrolements = Enrolement::where('subscription_is_paid','1')->get(); 
        foreach($enrolements as $enrolment){
            if(Course::find($enrolment->course_id)){
                $total +=  (Course::find($enrolment->course_id))->course_fee ; 
            }else $total = 0 ; 
        }
        return $total;
    }
    public function users(){return User::count() ;} 
    public function subs(){return Enrolement::count();}
    public function daily_sales(){
        $data=[] ; 
        for( $i = 6 ;$i>=0;$i-- ){
            $daily_sales = Enrolement::whereDate('created_at', '=', Carbon::now()->subDays($i))->where('subscription_is_paid','1')->count() ;
            array_push($data,$daily_sales);
            } 
            return $data ;
    }
    public function daily_subs(){
        $data=[] ; 
        for( $i = 6 ;$i>=0;$i-- ){
            $daily_subs = User::whereDate('created_at', '=', Carbon::now()->subDays($i))->count() ;
            array_push($data,$daily_subs);
            } 
            return $data ;
    }
    public function daily_enrolments(){
        $data=[] ; 
        for( $i = 6 ;$i>=0;$i-- ){
            $daily_sales = Enrolement::whereDate('created_at', '=', Carbon::now()->subDays($i))->count() ;
            array_push($data,$daily_sales);
            } 
            return $data ;
    }
    public function search(Request $request){ 
        
        $search = $request->input('search') ; 
        $users = User::where('name','LIKE',"%{$search}%")
         ->orWhere('phone_number','LIKE',"%{$search}%")
         ->orWhere('email','LIKE',"%{$search}%")
         ->get() ; 
        $courses = Course::where('title','LIKE',"%{$search}%") ; 
        return view('admin.search')->with(['users'=>$users,'courses'=>$courses]) ; 
    }
}

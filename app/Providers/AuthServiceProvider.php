<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //user prvivilege 
        Gate::define('isStudent',function($user){
            return $user->privilege == 'student' ; 
        }) ;
        //admin
        Gate::define('isAdmin',function($user){
            return $user->privilege == 'admin' ; 
        }) ;
        //tutor
        Gate::define('isTutor',function($user){
            return $user->privilege == 'tutor' ; 
        }) ;
    }
}

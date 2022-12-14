<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate as FacadesGate;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        FacadesGate::define('isCurrentUser', function (User $user, User $users) {
            if(Auth::user()->id == 1){
            return true;}
            else{
            return $user->id == $users->id;}
        });

        FacadesGate::define('isModerator', function (User $user) {
            return $user->roles_id <= 2;
        });

        FacadesGate::define('isAdmin', function (User $user) {
            return $user->roles_id === 1;
        });

        FacadesGate::define('isEditor', function (User $user) {
            return $user->roles_id <= 3;
        });
    }
}

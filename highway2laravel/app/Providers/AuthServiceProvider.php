<?php

namespace App\Providers;

use App\Policies\PostPolicy;
use App\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
        Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();
        /*
        $gate->before(function($user, $ability){
            if($user->type == 'admin'){
                return true;
            }
        });
        //
        $gate->define('update-post',function($user, $post) {
            return $user->id === $post->user_id;
        });
        */
    }
}

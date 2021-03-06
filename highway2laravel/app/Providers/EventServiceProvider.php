<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
       /* 'App\Events\UserCreateEvent' => [
            'App\Listeners\SendConfirmationEmailListener',
        ],*/
    ];

    protected $subscribe = [
        'App\Listeners\UserEventListener',
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Event::listen('event.myevent', function ($foo, $bar) {
            return 'true';
        });

       /* Event::listen('event.*', function (array $data) {
    
        });*/
    }
}

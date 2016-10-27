<?php

namespace App\Listeners;

use App\Events\UserCreateEvent;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConfirmationEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  UserCreateEvent  $event
     * @return void
     */
    public function handle(UserCreateEvent $event)
    {   
        $message = sprintf('Hello, %s! Your account has been created sucessfully', $event->user->name);
        $this->mailer->raw($message, function ($m) use ($event){
            $m->from('onesimo.batista@gmail.com','Onesimo Batista');
            $m->to($event->user->email, $event->user->name);
        });
    }
}

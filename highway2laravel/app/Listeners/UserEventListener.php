<?php

namespace App\Listeners;

class UserEventListener
{
	public function userCreated($event)
	{
		var_dump('user created');
	}

	public function subscribe($events)
	{
		$events->listen(
			'App\Events\userCreatedEvent',
			'App\Listeners\UserEventListener@userCreated'
		);
	}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function redirect()
    {
    	return Socialite::driver('github')->redirect();
    }

    public function handle()
    {
    	$user = Socialite::driver('github')->user();
    	dd($user);	
    }
}

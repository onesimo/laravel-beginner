<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    
    public function index()
    {
    	$users = ['Onesimo','Paull', 'Maria'];
    	return view('user.index',compact('users'));
    }

    public function show($id)
    {	
    	$users = ['Onesimo','Paull', 'Maria'];
    	return view('user.show',compact('id','users'));
    }

    public function create()
    {
    	return view('user.create');
    }

    public function store(Request $request)
    {	
    	/*
    	$request->only(['name']
    	$request->all()
    	$request->except(['name'])
    	*/
    	 
    	$this->validate($request,[
    		'name' => ['required'],
    		'email' => ['required','email'],
    		'password' => ['required','confirmed','min:6']
    	]);
    }

}

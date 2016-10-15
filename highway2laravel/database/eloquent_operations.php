<?php

/*

INSERT 

DB::table('users')->insert(['name'=> 'onesimo', 'email'=>'onesimobatista@gmail.com','password'=>bcrypt('password')])

DB::table('users')->insert([['name'=> 'John3', 'email'=>'jhond3@gmail.com','password'=>bcrypt('password')],['name'=>'Mary3', 'email'=>'maryd3@contact.com','password'=>bcrypt('password')]])

SELECT 

DB::table('users')->get()


List
DB::table('users')->where('id',1)->get()

Only one
DB::table('users')->where('id',1)->first()

DB::table('users')->count()

DB::table('users')->max('id')

DB::table('users')->min('id')

DB::table('users')->avg('id')

DB::table('users')->select('email as Email')->get()

DB::table('users')->orderBy('id','asc')->get()

DB::table('users')->take(2)

DB::table('users')->orderBy('name','asc')->take(2)->get()

DB::table('users')->orderBy('name','asc')->take(2)->skip(1)->get()

DB::table('users')->select(DB::raw ('count(*) as quantity'))->get()

DB::table('users')->where('id',1)->update(['name'=>'onesimo batista'])

DB::table('users')->delete()

DB::table('users')->where('id',4)->delete()

DB::table('users')->truncate()

WHERE

DB::table('users')->where('id','=','1')->get()

DB::table('users')->where('id','>','1')->get()

DB::table('users')->where('name','like','%onesimo%')->get()

DB::table('users')->where([['name','like','%onesimo%'],['id','=',1]])->get()

DB::table('users')->where('name','like','%onesimo%')->orWhere('id',2)->get()

DB::table('users')->whereBetween('id',[2,6])->get()

DB::table('users')->whereNotBetween('id',[2,6])->get()

DB::table('users')->whereNotBetween('id',[2,6])->get()

DB::table('users')->whereIn('id',[1,2,3])->get()

DB::table('users')->whereNotIn('id',[1,2,3])->get()

DB::table('users')->whereNull('remember_token')->get()

DB::table('users')->whereNotNull('remember_token')->get()

DB::table('users')->where('id',1)->orWhere(function ($query) { $query->whereNotNull('created_at'); })->get()

JOINs

DB::table('users')->join('post', 'users.id', '=','post.id_user')->get()

DB::table('users')->join('post', 'users.id', '=','post.id_user')->select('users.name','post.content')->get()

DB::table('users')->leftjoin('post', 'users.id', '=','post.id_user')->select('users.name','post.content')->get()

DB::table('users')->rightjoin('post', 'users.id', '=','post.id_user')->select('users.name','post.content')->get()

$first = DB::table('users')->whereNull('created_at')->get()
DB::table('post')->whereNull('updated_at')->union($first)->get()

DB::table('users')->join('post', function ($join){$join->on('users.id','=','post.id_user')->whereNotNull('post.content');})->select('users.name','post.content')->get()


ELOQUENT

php artisan make:model Pessoa --migration  | this will create a model and migration


$instance->save()

App\Pessoa::all() 

App\Pessoas::where('sex','male')->get()

App\Pessoas::where('sex','male')->first()

App\Pessoas::where('sex','male')->orderBy('created_at','desc')->get()

App\Pessoas::find(1)

Update
$pessoa = App\Pessoas::find(1)
$pessoa->save()

Delete
$pessoa = App\Pessoas::find(1)
$pessoa->delete()

To get an error
$pessoa = App\Pessoas::findOrFail(0)

*/
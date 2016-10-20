<?php 

/*
Autorização

$user = App\User::find(1)
Auth::login($user)

$post1 = App\Post::find(1)
$post2 = App\Post::find(2)

Gate::allows('update-post', $post1)
Gate::denies('update-post', $post1)

$user->can('update-post',$post1)
$user->cannot('update-post',$post1)

Policy

$user = App\User::find(1)
$post1 = App\Post::find(1)
$post2 = App\Post::find(2)

policy($post1)->update($user, $post1)

$this->autorize('update', $post); // $this->autorize($post);


*/
<?php

use App\Http\Controllers\PostController;
use App\Models\Countery;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;

/*
    routes
*/

Route::resource('posts', PostController::class);

Route::get('dates', function () {
    $date = new DateTime('+1 week');

    echo $date->format('m-d-y');

    echo '<br/>';
    
    echo Carbon::now();
    echo '<br/>';

    echo Carbon::now()->yesterday()->diffForHumans();
});

Route::get('getname', function (){
    // $user = User::find(1);
    // return $user->name;
    $post = Post::find(3);
    return $post->title;
});



<?php

use App\Http\Controllers\PostController;
use App\Models\Countery;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;


/*
    routes
*/

Route::resource('posts',PostController::class);

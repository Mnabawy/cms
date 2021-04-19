<?php

use App\Http\Controllers\PostController;
use App\Models\Countery;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::get('/post/{id}',[PostController::class , 'index']);

// // Route::resource('posts',PostController::class);

// Route::get('custom', [PostController::class, 'showcustomView']);


/*
    new routes
*/

// Route::get('/insert',function(){
//     DB::insert('insert into posts (title, content) values (?, ?)', ['php course', 'lorem ipsum tansflow']);
// });

// Route::get('/addvisitor',function(){
//     DB::insert('insert into visitors (name,number) values (?,?)',['mohamed','123']);
// });


// routes for reading from db
// Route::get('/visitors',function(){
//     $result = DB::select('select * from posts where id=?',[1]);
//     foreach($result as $value){
//         echo $value->content;
//     };
//     // return $result;
// });

// Route::get('/update', function () {
//     //to update the visitors record
//     // $result = DB::update('update visitors set name = "ahmed" where name = ?', ['mohamed']);

//     $result = DB::update('update posts set title = "laravel course" where id = ? ', [1]);

//     return $result;
// });


// Route::get('/delete', function(){

//     $resutl = DB::delete('delete from posts');

// });

// Route::get('/read', function () {
//     $posts = Post::all();
//     foreach ($posts as $post) {
//         return $post->content;
//     }
// });


// Route::get('/find', function () {
//     $post = Post::find(1);
//     return $post->content;
// });


// Route::get(
//     '/findwhere',
//     function () {
//         $posts = Post::where('id', 1)->orderBy('id', 'desc')->take(1)->get();
//         foreach($posts as $post){
//             return $post -> title;
//         }
//     }
// );

// Route::get('/findmore' , function (){
//     $posts = Post::where('id', '<', 50)->firstOrFail();
//     return $posts;
// });

// Route::get('/basicinsert', function () {
//     $post = new Post;

//     $post->title = 'new course';
//     $post-> content = 'new course content';

//     $post->save();
// });


// Route::get('/edit' , function (){
//     $post = Post::find(1);
//     $post->title = 'new title';
//     $post->content = 'new content';

//     $post->save();
// });

// Route::get('/create', function () {
//     Post::create(['title' => 'php course 2', 'content' => 'content of php course 2']);
// });
// to use craete first you have to use fillable property 
// Route::get('/update', function () {
//     Post::where('id', 1)->where('is_admin', 0)->update(['title'=> 'very new title']); 
// });

// Route::get('/delete', function () {
//     Post::find(2)->delete();
//     Post::find(1)->delete();
// });

// Route::get('/readSoftDelete', function () {
//     $post = Post::find(2);
//     return $post;
// });

// Route::get('/readFromTrash', function () {
//     $post = Post::withTrashed()->where('is_admin', 0)->get();
//     return $post;
// });

// Route::get('/restore', function () {

//     $post = Post::withTrashed()->restore();
//     return $post;
// });

// Route::get('/delete', function () {
//     Post::onlyTrashed()->forceDelete();
// });

/*
|--------------------------------------------------------------------------
| Eloquent Relationships
|--------------------------------------------------------------------------
*/

// Route::get('/user/{id}/post', function ($id) {
//     return User::find($id)->post->content;
// });

// // reverse Relationship
// Route::get('/post/{id}/user', function ($id) {
//     return Post::find($id)->user->name;
// });

// // one to many Relationship
// Route::get('/posts', function () {

//     $user = User::find(1);
//     foreach ($user->posts as $post) {
//         echo  $post->title . '</br>';
//     }
// });

// [1-1] Relationship post
Route::get('/post', function () {
    $post = User::find(1)->post->title;
    return $post;
});
// [1-1] inverse 
Route::get('post/{id}/user', function ($id) {
    return Post::find($id)->user->name;
});

// [1-M]
Route::get('user/{id}/posts', function ($id) {
    $posts = User::find($id)->posts;

    foreach ($posts as $post) {
        echo $post->title;
        echo '<br>';
    }
});

// [1-M] inverse [m-1]
Route::get('post/{id}/users', function ($id) {
    // $users =
    return Post::find($id)->user->name;
    // foreach ($users as $user) {
    //     echo $user->name;
    // }
});

// has many through Relationship
Route::get('/user/country', function () {
    $country = Country::find(2);
    foreach ($country->posts as $post) {
        return $post->title;
    }
});

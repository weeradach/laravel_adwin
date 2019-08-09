<?php
use App\Post;
use App\User;
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

Route::get('/', function (){

    return view('welcome');

});

//Route::get('/about', function (){
//
//    return 'hi about page';
//
//});
//
//Route::get('/contact', function (){
//
//    return 'hi i am contact';
//
//});
//
//Route::get('/post/{id}/{name}',function($id,$name){
//
//    return 'this is post number '.$id.' This is post name '.$name;
//
//});
//
//Route::get('admin/posts/example', array('as'=>'admin.home', function(){
//
//$url = route('admin.home');
//
//return 'this url is '.$url;
//
//}));

//Route::get('/post/{id}/{name}','PostController@index');

//Route::resource('posts','PostController');
//
//Route::get('/contact','PostController@contact');
//
//Route::get('post/{id}/{name}/{password}','PostController@show_post');

/*
|----------------------------------------------------------------
| DATABASE Raw SQL Queries
|----------------------------------------------------------------
 */
Route::get('/insert', function () {
    DB::insert('insert into posts (title, content) values (?, ?)', ['Laravel is awesome weeradach', 'Laravel is the best thing that has happend to PHP']);
});

//Route::get('/read', function () {
//    $results = DB::select('select * from posts where id = ?', [1]);
//
//    return var_dump($results);
////    foreach ($results as $post){
////        return $post->title;
////    }
//
//});

//Route::get('/update', function () {
//    $update = DB::update('update posts set title = "update title" where id = ?', [1]);
//    return $update;
//});

//Route::get('/delete', function () {
//    $deleted = DB::delete('delete from posts where id = ?', [1]);
//
//    return $deleted;
//});

/*
|----------------------------------------------------------------
| DATABASE Eloquent
|----------------------------------------------------------------
 */

//Route::get('/read', function () {
//
//    $post = Post::find(2);
//
////    foreach ($posts as $post){
////        return $post->title;
////    }
//    return $post->title;
//
//
//});


//Route::get('/findwhere', function () {
//
//    $posts = Post::where('id',3)->orderBy('id','desc')->take(1)->get();
//    return $posts;
//});

//Route::get('/findmore', function () {
//
////    $posts = Post::findOrfail(1);
////
////    return $posts;
//
//    $posts = Post::where('users_count','<',50)->findOrfail();
//
//});

//Route::get('/basicinsert', function () {
//
//    $post = new Post;
//    $post->title = 'New Eloquet title insert LARAVEL';
//    $post->content = 'Wow eloquent is really cool, look at this content 2';
//
//    $post->save();
//
//});

//Route::get('/basicinsert2', function () {
//
//    $post = Post::find(2);
//    $post->title = 'New Eloquet title insert LARAVEL';
//    $post->content = 'Wow eloquent is really cool, look at this content 2';
//
//    $post->save();
//
//});
//
//Route::get('/create', function () {
//    Post::create(['title'=>'the create method 2','content'=>'WOW I am learning a lot with weeradach chinpimai']);
//});

//Route::get('/update', function () {
//
//
//    Post::where('id',2)->where('is_admin',0)->update(['title'=>'NEW PHP TITLE','content'=>'I LOVE PHP TITLE']);
//
//});

//Route::get('/delete',function(){
//
//    $post = Post::findOrfail(8);
//
//    $post->delete();
//
//});

//Route::get('/delete2', function () {
//
//    Post::destroy([4,5]);
////    Post::where('is_admin',0)->delete();
//
//});

//Route::get('/softdelete', function () {
//
//   Post::find(7)->delete();
//
//});

//Route::get('/readsoftdelete', function () {
//
////    $post = Post::find(6);
////
////    return $post;
//
////    $post =  Post::withTrashed()->where('id',6)->get();
////    return $post;
//
//    $post =  Post::onlyTrashed()->get();
//    return $post;
//
//
//});

//Route::get('/restore', function () {
//
//    Post::withTrashed()->where('is_admin',0)->restore();
//
//});
//
//Route::get('/forcedelete', function () {
//
//    Post::onlyTrashed()->where('is_admin',0)->forceDelete();
//
//});

/*
|----------------------------------------------------------------
| ELOQUENT Relationship
|----------------------------------------------------------------
 */

//One to One relationship
//--------------------------------------------------------------
//Route::get('/user/{id}/post', function ($id) {
//
//    return User::find($id)->post;
//
//});
//
//Route::get('/post/{id}/user', function ($id) {
//
//    return Post::find($id)->user->name;
//
//});

//One to Many
//--------------------------------------------------------------

//Route::get('/posts', function () {
//    $user = User::findOrfail(1);
//
//    foreach ($user->posts as $post){
//        echo $post->title.'<br>';
//    }
//
//});

//Many to Many relationship
//--------------------------------------------------------------
//Route::get('/user/{id}/role', function ($id) {
//
//    $user = User::find($id)->roles()->orderBy('id','desc')->get();
//
//    return $user;
//    foreach ($user->roles as $role){
//        return $role->name;
//    }
// output::[{"id":2,"name":"subscrible","created_at":null,"updated_at":null,"pivot":{"user_id":2,"role_id":2}}]
//
//});

//Accessing the intermediate table / pivot
Route::get('user/pivot', function () {

    $user = User::find(1);

    foreach ($user->roles as $role){
        echo $role;
    }

});

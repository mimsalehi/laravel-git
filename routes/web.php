<?php

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

//Route::get('/contact', function (){
//  return "به صفحه ی تماس با ما خوش آمدید";
//});
//
//Route::get('/about', function(){
//  return "درباره ما";
//});
//
//Route::get('/post/{id}/{name?}', function($id, $name= null){
//  return 'آی دی این پست برابر است با:'. " " . $id. " $name";
//});
//
//Route::prefix('user')->group(function(){
//  Route::get('posts/example', function(){
//    return "گروه بندی ادمین";
//  });
//  Route::get('login', function(){
//    return "صفحه لاگین";
//  });
//});

//Route::get('/contact', 'PostsController@contact');
//Route::get('/posts/{id?}', 'PostsController@index');
//Route::get('/show-view/{id}/{name}/{password}', 'PostsController@showMyView');
//
//Route::get('/insert', 'PostsController@insert');
//Route::get('/select', 'PostsController@select');
//Route::get('update', 'PostsController@updatePost');
//Route::get('delete', 'PostsController@deletePost');

//Route::get('posts','PostsController@getAllPosts');
//Route::get('save-post','PostsController@savePost');
//Route::get('update-post','PostsController@newUpdatePost');
//Route::get('delete-post', 'PostsController@newDeletePost');
//Route::get('data-trash', 'PostsController@workWithTrash');
//Route::get('restore-post', 'PostsController@restorePost');
//Route::get('force-delete-post', 'PostsController@forceDelete');

// Eloquent Relationship

//One to One Relationship
//Route::get('user/{id}/post', function($id){
//  $user_post = \App\User::find($id)->post->content;
//  return $user_post;
//});
//
//Route::get('post/{id}/user', function($id){
//  $post_user = \App\Post::find($id)->user->email;
//  return $post_user;
//});

//One to Many Relationship
//Route::get('user/{id}/posts', function($id){
//  $user_posts = \App\User::find($id)->posts;
//  foreach ($user_posts as $post){
//    echo $post->title;
//    echo "</br>";
//  }
//});

// Many to Many Relationship
//Route::get('user/{id}/roles', function($id){
//  $user = \App\User::find($id);
//  foreach ($user->roles as $role){
//    echo $role->name;
//    echo "<br/>";
//  }
//});
//
//Route::get('user/pivot', function(){
//  $user = \App\User::find(1);
//  foreach ($user->roles as $role){
//    echo $role->pivot->created_at;
//    echo "<br/>";
//  }
//});

// Has Many Through Relationship
//Route::get('user/country', function(){
//  $country = \App\Country::find(1);
//  foreach ($country->posts as $post){
//    echo $post->title;
//    echo "</br>";
//  }
//});

// Polymorphic Relationship
//Route::get('user/photos', function(){
//  $user = \App\User::find(1);
//  foreach ($user->photos as $photo){
//    echo $photo->path;
//    echo "</br>";
//  }
//});
//Route::get('post/photos', function(){
//  $post = \App\Post::find(10);
//  foreach ($post->photos as $photo){
//    echo $photo->path;
//    echo "</br>";
//  }
//});
//Route::get('photo/{id}/post', function($id){
//  $photo = \App\Photo::find($id);
//  return $photo->imageable;
//});
//
//Route::get('post/tags', function(){
//  $post = \App\Post::find(10);
//  foreach ($post->tags as $tag) {
//    echo $tag->name;
//    echo "</br>";
//  };
//});
//Route::get('video/tags', function(){
//  $video = \App\Video::find(1);
//  foreach ($video->tags as $tag) {
//    echo $tag->name;
//    echo "</br>";
//  };
//});
//Route::get('tag/{id}/post', function($id){
//  $tag = \App\Tag::find($id);
//  foreach ($tag->posts as $post) {
//    echo $post->title;
//    echo "</br>";
//  };
//});

//CRUD One to Many Relationship
//Route::get('/create', function(){
//  $user = \App\User::find(1);
//  $post = new \App\Post();
//  $post->title = 'یک پست جدید با رابطه one to many';
//  $post->content = 'در این قسمت توضیحات مربوط به کانتت قرار داده می شود';
////  $post->user_id = $user->id;
//  $user->posts()->save($post);
//});
//
//Route::get('/read', function(){
//  $user = \App\User::find(1);
//
//  foreach ($user->posts as $post){
//    echo $post->title;
//    echo "<br/>";
//  }
//});
//
//Route::get('/update', function(){
//  $user = \App\User::find(1);
//  $user->posts()->whereId(10)->update(['title'=>'آپدیت پست از CRUD', 'content'=> 'بروزرسانی مطلب توضیحات']);
//});
//
//Route::get('delete', function(){
//  $user = \App\User::find(1);
//  $user->posts()->whereId(10)->delete();
//});

//CRUD Many to Many Relationship
//Route::get('create', function(){
//  $user = \App\User::find(1);
//  $role = new \App\Role();
//  $role->name = 'نویسنده';
//  $user->roles()->save($role);
//});
//
//Route::get('read', function(){
//  $user = \App\User::find(1);
//  foreach ($user->roles as $role){
//    echo $role->name;
//    echo "<br/>";
//  }
//});
//
//Route::get('update', function(){
//  $user = \App\User::find(1);
//  if($user->has('roles')){
//    foreach ($user->roles as $role){
//      if($role->name == 'نویسنده'){
//        $role->name = 'Author';
//        $role->save();
//      }
//    }
//  }
//});
//
//Route::get('delete', function(){
//  $user = \App\User::find(1);
//  foreach ($user->roles as $role){
//    if($role->name == 'Author'){
//      $role->delete();
//    }
//  }
//});
//Route::get('detach', function(){
//  $user = \App\User::find(1);
//  $user->roles()->detach(1);
//});
//Route::get('attach', function(){
//  $user = \App\User::find(1);
//  $user->roles()->attach(1);
//});
//Route::get('sync', function(){
//  $user = \App\User::find(1);
//  $user->roles()->sync([1]);
//});

//CRUD Polymorphic Relationship
//Route::get('/create', function(){
//  $video = \App\Video::find(1);
//  $video->tags()->create(['name'=>'morph video']);
//});
//Route::get('read', function(){
//  $video = \App\Video::find(1);
//  foreach ($video->tags as $tag){
//    echo $tag->name;
//    echo "<br/>";
//  }
//});
//Route::get('update', function(){
//  $video = \App\Video::find(1);
//  $tag = $video->tags;
//  $newtags = $tag->where('id', 3)->first();
//  $newtags->name = 'تگ جدید';
//  $newtags->save();
//});
//
//Route::get('delete', function(){
//  $video = \App\Video::find(1);
//  $tag = $video->tags;
//  $deletedTag = $tag->where('id', 3)->first();
//  $deletedTag->delete();
//});
//
//Route::get('detach', function(){
//  $video = \App\Video::find(1);
//  $video->tags()->detach();
//});
//Route::get('attach', function(){
//  $video = \App\Video::find(1);
//  $video->tags()->attach(1);
//});
//Route::get('sync', function(){
//  $video = \App\Video::find(1);
//  $video->tags()->sync([1,2]);
//});

// Form Routes

//use Illuminate\Support\Facades\Storage;
//
//Route::resource('/posts', 'PostsController');
//
//Route::get('file', function (){
//
//    return Storage::disk('files')->download('hero.png');
//});


//use Illuminate\Support\Facades\Auth;
//

use Illuminate\Support\Facades\App;

Auth::routes(['verify'=> true]);
//

Route::middleware(['auth', 'verified'])->group(function(){
  Route::get('/home', 'HomeController@index')->name('home');
  Route::resource('/posts', 'PostsController');
});
Route::get('/');
//
//Route::get('/', function(){
////  $user = Auth::user();
////  $id = Auth::id();
////
////  if(Auth::check()){
////    echo "Hello: " . $user->name;
////    echo "<br />";
////    echo "User ID: " . $id;
////  }else{
////    return redirect()->to('home');
////  }
////  $email = 'reza@gmail.com';
////  $password = "123456";
////  $auth = Auth::attempt(['email'=>$email, 'password'=>$password]);
//  $user = Auth::loginUsingId(3);
//  dd($user);
//  Auth::logout();
//});

//Route::get('/admin', function(){
//  echo "Hello to Admin Page";
//})->middleware('isAdmin:مدیر');
//
//
//use Illuminate\Http\Request;
//
//Route::get('session', function(Request $request){
////  $request->session()->put(["username"=>"reza"]);
////    session(["email"=>"reza@gmail.com"]);
////    $request->session()->forget('username');
////  $request->session()->keep('message');
////    $request->session()->flush();
////
////  return $request->session()->all();
//});

// یک تغییر ایجاد شد
Route::prefix('fa')->group(function(){
  App::setLocale('fa');
//  $locale = App::getLocale();
//  if(App::isLocale('fa')){
//    dd('زبان فارسی شد');
//  }
  Route::get('message', function(){
    return view('message');
  });
});

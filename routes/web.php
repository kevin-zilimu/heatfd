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

Route::get('/', 'pagesController@index');
Route::get('/about','pagesController@about');
Route::get('/contact','pagesController@contact');

Route::resource('posts','postController');
/*
Route::group(['middleware'=>['auth','roles'],'roles'=>['Administrator']],function(){
    Route::get('user/create','UserController@create');
    Route::get('user/delete','UserController@delete');
}); */

Auth::routes();

//Route::get('/dashboard', 'DashboardController@index');




//Route::resource('cookPosts','foodPostsController');

Route::resource('signin','loginController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/main', 'mainController@index');
Route::resource('/main','OrderdisplayController');

Route::group(['middleware'=>'App\Http\Middleware\superadmin'],function(){
    //
});

Route::group(['middleware'=>'App\Http\Middleware\admin'],function(){
    Route::match('get','/adminPanel','adminController@index');
    Route::resource('adminPanel','adminController');
    //Route::resource('adminController','adminController');
});
Route::group(['middleware'=>'App\Http\Middleware\cook'],function(){
    Route::match('get','/cookPosts','foodPostsController@index');
    Route::resource('cookPosts','foodPostsController');
});
Route::group(['middleware'=>'App\Http\Middleware\customer'],function(){
   // Route::match('resource','/adminPanel','adminController');
});


/*Route::get('/adminPanel',[
    'uses'=>'adminController@create',
    'as'=>'adminPanel.create'
]); */
/*
Route::group(['middleware'=>['web','auth']], function(){
    Route::get('/',function(){
        return view('welcome');
    });
    Route::get('/',function(){
        if(Auth::user()->Role_Id == 2){
            $users['users']=\App\User::all();
            return view('adminPanel.index',$users);
        }elseif(Auth::user()->Role_Id == 3){

            $users['foodposts']=\App\Foodpost::all();
            return view('cookPosts.posts.index',$users);
           
        }else {
            return view('layouts/app');
        }
    });
});
*/

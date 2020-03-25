<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [
  'uses' => 'PagesController@index',
  'as' => 'index'
]);

// Route::get('/login', [
//   'uses' => '',
//   'as' => 'login'
// ]);

// Route::get('/register', [
//   'uses' => '',
//   'as' => 'register'
// ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//THIS GROUPS BELONGS TO EVERY MENTORS ACTIONS AND PREVILLEDGES
Route::group(['Prefix' => 'Mentor', 'middleware' => 'Mentor'], function(){

  Route::post('/team/create', [
    'uses' => 'TeamController@create',
    'as' => 'team.create'
  ]);

  Route::get('/team/delete/{id}', [
    'uses' => 'TeamController@destroy',
    'as' => 'team.delete'
  ]);

  Route::post('/team/update', [
    'uses' => 'TeamController@update',
    'as' => 'team.update'
  ]);


});


// THIS GROUP BELONGS TO EVERY AUTHENTICATED PERSONS ACTIONS AND PREVILLEDGES

Route::group(['middleware' => 'auth'], function(){


  // for the post
  Route::post('/post.create', [
    'uses' => 'PostController@create',
    'as' => 'post.create'
  ]);

  Route::get('/posts', [
    'uses' => 'PostController@index',
    'as' => 'posts'
  ]);

  Route::get('/post/edit/{id}', [
    'uses' => 'PostController@edit',
    'as' => 'post.edit'
  ]);

  Route::post('posts/update/{id}', [
    'uses' => 'PostController@update',
    'as' => 'post.update'
  ]);

  Route::get('/post.delete', [
    'uses' => 'PostController@destroy',
    'as' => 'post.delete'
  ]);

//for the team auth actions
  Route::get('/teams', [
    'uses' => 'TeamController@index',
    'as' => 'teams'
  ]);

  Route::get('/team/join/{id}', [
    'uses' => 'TeamController@join',
    'as' => 'team.join'
  ]);

  //for user profile actions

  Route::get('/profile', [
    'uses' => 'UserProfileController@index',
    'as' => 'profile'
  ]);


  Route::get('/profile/edit', [
    'uses' => 'UserProfileController@edit',
    'as' => 'profile.edit'
  ]);

  

});

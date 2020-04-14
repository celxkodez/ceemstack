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
Route::group(['Prifix' => 'Mentor', 'middleware' => 'mentor'], function(){

  Route::post('/team/create', [
    'uses' => 'TeamController@store',
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

  Route::get('/team', [
    'uses' => 'TeamController@index',
    'as' => 'teams'
  ]);


  // for the index view of all teams



});


// THIS GROUP BELONGS TO EVERY AUTHENTICATED PERSONS ACTIONS AND PREVILLEDGES

Route::group(['middleware' => 'auth'], function(){


  // for the post
  Route::get('/post/create', [
    'uses' => 'PostController@create',
    'as' => 'post.create'
  ]);

  Route::post('/post/store', [
    'uses' => 'PostController@store',
    'as' => 'post.store'
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
    'uses' => 'TeamController@joinTeam',
    'as' => 'team.join'
  ]);

  Route::get('/team/leave/{id}', [
    'uses' => 'TeamController@leaveTeam',
    'as' => 'team.leave'
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


// CONDITIONAL PAGES ROUTE 
Route::get('/products/buy', 'ProductController@index')->name('products.index');



// FOR ONLY TESTING PURPOSES
Route::get('/test', [
  'uses' => 'TestsController@test',
  'as' => 'tests'
]);


//For None authenticated users and for just pages 


Route::get('/market', 'PagesController@market')->name('market');

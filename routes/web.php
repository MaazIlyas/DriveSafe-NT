<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\InstructorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where we registered the web routes for our application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('instructors', InstructorController::class);

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'LearningController@index')->name('learning.index');
    Route::get('/instructors/list', 'InstructorController@index')->name('instructors.index');
    Route::post('/instructors/search', 'InstructorController@search')->name('instructors.search');
    Route::get('/instructors/{instructor}', 'InstructorController@show')->name('instructors.show');

    /**
     * Classes Routes
     * Currently not in use
     */
    Route::get('/classes/list', 'LearningController@classes')->name('learning.classes');

    #-------------------------|Guest routes|------------------------#
    /**
     * Guest auth roots (will not work when logged in)
     */
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->middleware('lower.email')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->middleware('lower.email')->name('login.perform');

        /**
         * logout route while logged in
         */
        //Route::get('/logout', 'LoginController@show')->name('login.show');
        //Route::post('/logout', 'LoginController@login')->name('login.perform');
    }); 
    #------------------------------------------------------------------#

    #------------------------|for all auth types|----------------------#
    Route::group(['middleware' => ['auth']], function() {
        
        Route::post('/instructors/store', 'InstructorController@store')->name('instructors.store');
        Route::get('/instructors/new/create', 'InstructorController@create')->name('instructors.create');
        Route::any('/instructors/{instructor}/update', 'InstructorController@update')->name('instructors.update');
        //Route::any('/instructors/{instructor}/destroy', 'InstructorController@destroy')->name('instructors.destroy');
        Route::post('/instructors/destroy', 'InstructorController@destroy')->name('instructors.destroy');
        Route::get('/instructors/{instructor}/edit', 'InstructorController@edit')->name('instructors.edit');


        Route::post('/reviews', 'ReviewController@store')->name('reviews.store');
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
    #---------------------------------------------------------------------#
});

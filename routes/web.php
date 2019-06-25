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

Route::get('/', function () {
    return view('Frontend.index');
});
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('login', 'PageController@login')->name('login');
    Route::get('/', 'PageController@index')->name('index');
    Route::get('about', 'PageController@about')->name('about');
    Route::any('contact', 'PageController@contact')->name('contact');

    Route::group(['prefix' => 'Courses'], function () {
        Route::get('courses', 'CourseController@courses')->name('courses');
        Route::get('courses-single', 'CourseController@courses_single')->name('courses-single');

    });
});
Route::group(['namespace' => 'Backend'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});



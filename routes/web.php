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

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('login', 'PageController@login')->name('login');
    Route::get('/', 'PageController@index')->name('index');
    Route::get('about', 'PageController@about')->name('about');

    Route::group(['prefix' => 'Contact'], function () {
        Route::any('/', 'PageController@contact')->name('contact');
    });

    Route::group(['prefix' => 'Courses'], function () {
        Route::get('courses/{id?}', 'CourseController@courses')->name('courses');
        Route::get('/apply', 'CourseController@apply')->name('apply');
        Route::get('courses-single/{id?}', 'CourseController@courses_single')->name('courses-single');

    });
});
Route::group(['namespace' => 'Backend'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::group(['prefix' => 'slides'], function () {
        Route::any('slide-front', 'SlideController@slide_front')->name('slide-front');
        Route::any('slide-front-edit/{id?}', 'SlideController@slide_front_edit')->name('slide-front-edit');
        Route::post('slide-status', 'SlideController@slide_status')->name('slide-status');
        Route::get('slide-delete/{id}', 'SlideController@slide_delete')->name('slide-delete');
        Route::any('image-sections', 'SlideController@image_sections')->name('image-sections');

    });
    Route::group(['prefix' => 'Setting'], function () {
        Route::any('setting-page', 'SettingController@setting_page')->name('setting-page');

    });
    ROute::group(['prefix' => 'Contact'], function () {
        Route::any('manage-contact', 'ContactController@manage_contact')->name('manage-contact');
        Route::get('contact-message', 'ContactController@contact_message')->name('contact-message');
        Route::get('delete-contact/{id}', 'ContactController@delete_contact')->name('delete-contact');
        Route::get('reply/{id}', 'ContactController@reply')->name('reply');
        Route::any('reply-mail', 'ContactController@reply_mail')->name('reply-mail');


    });
    Route::group(['prefix' => 'Course'], function () {
        Route::any('/courses', 'CourseController@add_course')->name('course');
        Route::any('/course-details', 'CourseController@course_details')->name('course-details');
        Route::any('/links', 'CourseController@links')->name('links');


    });


});



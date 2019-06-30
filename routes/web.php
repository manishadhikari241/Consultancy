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
    Route::any('login', 'PageController@login')->name('login');
    Route::get('/', 'PageController@index')->name('index');
    Route::get('about', 'PageController@about')->name('about');
    Route::get('gallery', 'PageController@gallery')->name('gallery');

    Route::group(['prefix' => 'Contact'], function () {
        Route::any('/', 'PageController@contact')->name('contact');
    });
    Route::group(['prefix' => 'Student-Visa'], function () {
        Route::any('study-japan', 'PageController@study_japan')->name('study-japan');
    });

    Route::group(['prefix' => 'Courses'], function () {
        Route::get('courses/{id?}', 'CourseController@courses')->name('courses');
        Route::any('/apply/{id?}', 'CourseController@apply')->name('apply');
        Route::get('courses-single/{id?}', 'CourseController@courses_single')->name('courses-single');

    });
});
Route::group(['namespace' => 'Backend','middleware'=>'auth'], function () {
    Route::any('dashboard', 'DashboardController@index')->name('dashboard');
    Route::any('gallery-manage', 'SlideController@gallery')->name('gallery-manage');
    Route::get('gallery-delete/{id}', 'SlideController@gallery_delete')->name('gallery-delete');
    Route::get('logout', 'DashboardController@logout')->name('logout');

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
    Route::group(['prefix' => 'Student'], function () {
        Route::any('/students', 'StudentController@view_students')->name('students');
        Route::any('delete-student/{id}', 'StudentController@delete_student')->name('delete-student');


    });
    Route::group(['prefix' => 'student_visa'], function () {
        Route::any('study-japan-back', 'StudentVisaController@study_japan_back')->name('study-japan-back');
        Route::any('study-japan-edit{id?}', 'StudentVisaController@study_japan_edit')->name('study-japan-edit');
        Route::get('study-japan-delete/{id}', 'StudentVisaController@study_japan_delete')->name('study-japan-delete');

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
        Route::any('/testimonial', 'CourseController@testimonial')->name('testimonial');
        Route::any('edit-course/{id?}', 'CourseController@edit_course')->name('edit-course');
        Route::any('delete-course/{id}', 'CourseController@delete_course')->name('delete-course');
    });


});



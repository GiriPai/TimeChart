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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('staff.home');


Route::prefix('admin')->group(function () {
      
    Route::prefix('staff')->group(function (){
    	Route::get('/viewall','StaffController@admin_view_all')->name('admin.staff.index');
    	Route::get('/insert','StaffController@admin_insert')->name('admin.staff.insert');
    	Route::post('/store','StaffController@admin_store')->name('admin.staff.store');
    	Route::get('/show/{id}','StaffController@admin_show')->name('admin.staff.show');
    	Route::get('/delete/{id}','StaffController@admin_delete')->name('admin.staff.delete');  
    });

    Route::prefix('student')->group(function (){
    	Route::get('{id}/view','StudentController@admin_view_all')->name('admin.student.index');
    	Route::get('/insert','StudentController@admin_insert')->name('admin.student.insert');
    	Route::post('/store','StudentController@admin_store')->name('admin.student.store');
    	Route::get('/show/{id}','StudentController@admin_show')->name('admin.student.show');
    	Route::get('/delete/{id}','StudentController@admin_delete')->name('admin.student.delete');  
    });

    Route::prefix('subjects')->group(function (){
    	Route::get('/','SubjectController@admin_view_all')->name('admin.subjects.index');
    	Route::get('/insert','SubjectController@admin_insert')->name('admin.subjects.insert');
    	Route::post('/store','SubjectController@store')->name('admin.subjects.store');
    	Route::get('/show/{id}','SubjectController@admin_show')->name('admin.subjects.show');
    	Route::get('/delete/{id}','SubjectController@admin_delete')->name('admin.subjects.delete');
    	Route::get('/edit/{id}','SubjectController@admin_edit')->name('admin.subjects.edit');
    	Route::post('/update','SubjectController@admin_update')->name('admin.subjects.update');
    });



    Route::prefix('master')->group(function (){
        Route::get('/','DayAndSessionController@admin_view_all')->name('admin.ds.index');
        Route::get('/insert','DayAndSessionController@admin_insert')->name('admin.ds.insert');
        Route::post('/store','DayAndSessionController@store')->name('admin.ds.store');
        Route::get('/show/{id}','DayAndSessionController@admin_show')->name('admin.ds.show');
        Route::get('/delete/{id}','DayAndSessionController@admin_delete')->name('admin.ds.delete');
        Route::get('/edit/{id}','DayAndSessionController@admin_edit')->name('admin.ds.edit');
        Route::post('/update','DayAndSessionController@admin_update')->name('admin.ds.update');
        Route::get('/ajax/{class_name}/courses','DayAndSessionController@getSubjects');
    });

    Route::prefix('halls')->group(function (){
        Route::get('/bookings','HallAllocationController@admin_booking')->name('admin.halls.booking');
    });

    Route::prefix('dd')->group(function (){
        Route::get('/','DateAndDayController@index')->name('admin.dd.index');
        Route::get('/{id}/delete','DateAndDayController@destroy')->name('admin.dd.delete');
        Route::post('/store','DateAndDayController@store')->name('admin.dd.store');

    });

    Route::prefix('sl')->group(function (){
        Route::get('/','SessionLogController@admin_view_all')->name('admin.sl.view_all');
        Route::get('/edit/{id}','SessionLogController@admin_edit')->name('admin.sl.edit');
        Route::post('/update/{id}','SessionLogController@admin_update')->name('admin.sl.update');
        Route::get('/delete/{id}','SessionLogController@destroy')->name('admin.sl.delete');
    });



    Route::get('/','AdminController@index')->name('admin-home');
 
});

Route::get('/subjects','SubjectController@index')->name('staff.subject.index');
Route::get('/staffs','StaffController@index')->name('staff.staff.index');
Route::get('/staffs/{id}','StaffController@show')->name('staff.staff.show');

Route::get('/halls','HallAllocationController@index')->name('staff.hall.index');
Route::get('/create','HallAllocationController@create')->name('staff.hall.create');
Route::post('/store','HallAllocationController@store')->name('staff.hall.store');
Route::get('/schedules','SessionLogController@index')->name('staff.schedules');
Route::post('/schedules/search','SessionLogController@search')->name('staff.schedules.search');

Route::get('/students/{class_name}','StudentController@index')->name('staff.students');
Route::get('/students/show/{id}','StudentController@show')->name('staff.student.show');
Route::get('/student/{class_name}/insert','StudentController@create')->name('staff.student.insert');
Route::post('/student/store','StudentController@store')->name('staff.student.store');
Route::get('/student/edit/{id}','StudentController@edit')->name('staff.student.edit');
Route::post('/student/update/{id}','StudentController@update')->name('staff.student.update');
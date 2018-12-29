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


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('pages.index');
    })->name('admin.index');
    
    Route::get('/tables', function () {
        return view('pages.tables');
    })->name('admin.tables');
    
    Route::get('/flot', function () {
        return view('pages.flot');
    })->name('admin.flot');

    Route::get('/morris', function () {
        return view('pages.morris');
    })->name('admin.morris');

     Route::get('/forms', function () {
        return view('pages.forms');
    })->name('admin.forms');


    Route::get('/panels-wells', function () {
        return view('pages.panels-wells');
    })->name('admin.panels-wells');

    Route::get('/buttons', function () {
        return view('pages.buttons');
    })->name('admin.buttons');

    Route::get('/notifications', function () {
        return view('pages.notifications');
    })->name('admin.notifications');

    Route::get('/typography', function () {
        return view('pages.typography');
    })->name('admin.typography');

    Route::get('/icons', function () {
        return view('pages.icons');
    })->name('admin.icons');

    Route::get('/grid', function () {
        return view('pages.grid');
    })->name('admin.grid');

    Route::get('/blank', function () {
        return view('pages.blank');
    })->name('admin.blank');

    Route::get('/login', function () {
        return view('pages.login');
    })->name('admin.login');


    

    

});
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

// Route::get('/', 'HomeController@index')->name('welcome');

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//Admin Group Router
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider', 'SliderController');
    Route::resource('category', 'CategoryController');
    Route::resource('item', 'ItemController');


    Route::get('gallery','GalleryController@index')->name('gallery.index');
    Route::get('gallery/create','GalleryController@create')->name('gallery.create');
    Route::post('gallery/store','GalleryController@store')->name('gallery.store');
    Route::post('gallery/delete/{id}','GalleryController@delete')->name('gallery.delete');


    Route::get('order','OrderController@index')->name('order.index');
    Route::get('order/create','OrderController@create')->name('order.create');
    Route::post('order/store','OrderController@store')->name('order.store');
    Route::post('order/delete/{id}','OrderController@delete')->name('order.delete');




    Route::get('get-reservation','ReservationController@indexCurrent')->name('curr.index');
    Route::get('get-done-reservation','ReservationController@indexDone')->name('done.index');
    Route::get('get-accept-reservation','ReservationController@getAcceptReservation')->name('accept.index');
    Route::get('get-cancel-reservation','ReservationController@getCancelReservation')->name('cancel.index');
    Route::post('accept-reservation/{id}','ReservationController@acceptReservation')->name('accept.reservation');
    Route::post('cancel-reservation/{id}','ReservationController@cancelReservation')->name('cancel.reservation');
});


Route::group( [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { 
        Route::get('/', 'HomeController@index')->name('welcome');
        Route::get('/order', 'HomeController@order')->name('get.order');
        Route::get('/gallery','GalleryController@index')->name('get.image');
        ###########################################################
        Route::get('/menu','GalleryController@indexmenu')->name('get.menu');
        Route::get('/resevration',function(){
            return view('reservation');
        })->name('get.reservation');
        Route::get('/contact',function(){
            return view('contact');
        })->name('get.contact');
        ############################################################
        Route::post('/reservation', 'ReservationController@reserve')->name('reservation.reserve');
    }
);

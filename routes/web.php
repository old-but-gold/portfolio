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

Route::post('send_mail','MailSetting@send_form')->name('send_mail');

Route::group([], function(){
    Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home'] );
    Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page'] );

    Route::auth();
});

// admin

Route::group(['middleware'=>'auth', 'prefix'=>'admin'], function ()
{
    Route::get('/', function(){
        if (view()->exists('admin.index')) {
            $data = ['title'=> 'Admin panel'];
            return view('admin.index', $data);
        };
    });

    Route::group(['prefix'=>'pages'],function(){
        //admin/pages
        Route::resource('pages', 'PagesController');
    });

    Route::group(['prefix'=>'portfolios'],function(){
        //admin/portfolios
        Route::resource('portfolios', 'PortfolioController');
    });

    Route::group(['prefix'=>'services'],function(){

        Route::resource('services', 'ServiceController');
    });


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

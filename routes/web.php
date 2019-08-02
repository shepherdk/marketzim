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
// Route::get('/', function () {
//     view('index');
// } );

Route::resource('articles', 'ArticlesController');

Route::get('/', 'ArticlesController@index');

// Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/blog-details', 'PagesController@blogDetails');

Route::get('/blog', 'PagesController@blog');

Route::get('/cart', 'PagesController@cart');

Route::get('/checkout', 'PagesController@checkout');

Route::get('/contact', 'PagesController@contact');

Route::get('/error404', 'PagesController@error404');

Route::get('/faq', 'PagesController@faq');

Route::get('/my-account', 'PagesController@myAccount');

Route::get('/portfolio-details', 'PagesController@portfolioDetais');

Route::get('/shop-grid', 'PagesController@shopGrid');

Route::get('/single-product', 'PagesController@singleProduct');

Route::get('/team', 'PagesController@team');

Route::get('/wishlist', 'PagesController@wishlist');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

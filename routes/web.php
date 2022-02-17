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

Route::match(['get', 'post'],'/', 'MainController@home')->name('home');;
Route::get('/profile', 'MainController@profile')->name('profile');
Route::get('/blog', 'MainController@blog')->name('blog');
Route::get('/order', 'MainController@order')->name('order');
Route::get('/payment', 'MainController@payment')->name('payment');
Route::get('/faq', 'MainController@faq')->name('faq');
Route::get('contact', 'MainController@contact')->name('contact');
Route::get('/category/{id}', 'MainController@category')->name('category');
Route::get('/tag/{id}', 'MainController@tag')->name('tag');
Route::get('/item/{id}', 'MainController@item')->name('item');
Route::get('/test', function (){
    $i = 1;
    while ($i = 5){
        $i++;
        return $i . ', ';
    }
});

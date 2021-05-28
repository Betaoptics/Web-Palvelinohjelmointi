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

Route::get('/about', function () {
    return view('siteinfo');
});

Route::get('/aboutfolder', function () {
    return view('kansio/siteinfo');
});

Route::get('/reitti', function () {
    return view('child');
});


// H5T1
Route::get('/omalaravel', function () {
    return view('omaleiska');
});


// H5T3
Route::get('/do_shopping', function () {
    return view('do_shopping');
});


// H5T3
Route::get('/basket_content', function () {
    return view('basket_content');
});



Route::get('/contact1', 'ContactController@showinfo');
Route::get('/contact2', 'ContactController@returninfo');

Route::get('/person', 'ContactController@showperson');
Route::get('/listpersons', 'ContactController@listpersons');




// H6T2

Route::get('/customers', 'CustomerController@index');
Route::post('/customers', 'CustomerController@store');
Route::get('/customers/create', 'CustomerController@create');

Route::get('/customers/{id}', 'CustomerController@show');

Route::get('/customers/{id}/edit', 'CustomerController@edit');
Route::patch('/customers/{id}', 'CustomerController@update');

Route::delete('/customers/{id}', 'CustomerController@destroy');



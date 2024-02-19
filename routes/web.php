<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home1');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/zakaz', function () {
    return view('zakaz');
});



Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/info/oblast_akkreditazii', function () {
    return view('oblast_akkreditazii');
});

Route::get('/info/oborudovanie', function () {
    return view('oborudovanie');
});

Route::get('/info/ispitaniya', function () {
    return view('ispitaniya');
});

Route::get('/info/mikrobiologiya', function () {
    return view('mikrobiologiya');
});

Route::get('/info/proizvodstvenniy_control', function () {
    return view('proizvodstvenniy_control');
});

Route::get('/profile/dlya_zayavki', function () {
    return view('dlya_zayavki');
});

Route::get('/profile/update_zayavki', function () {
    return view('update_zayavki');
});
Route::get('/profile/edit', function () {
    return view('edit');
});

Route::get('/zakaz/zayavka', function () {
    return view('zayavka');
});

Route::get('/zakaz/zayavka/products', function () {
    return view('products');
});

Route::get('/zakaz/zayavka/otbor', function () {
    return view('otbor');
});

Route::get('/zakaz/zayavka/otbor/obrazez', function () {
    return view('obrazez');
});

Route::get('/zakaz/zayavka/done', function () {
    return view('done');
});

Route::get('/zakaz/zayavka/act/vozduh', function () {
    return view('vozduh');
});

Route::get('/zakaz/zayavka/act/smiv', function () {
    return view('smiv');
});

Route::get('/zakaz/zayavka/act/obr', function () {
    return view('obr');
});

Route::get('/profile/page/{id}', function () {
    return view('page');
});
Route::get('/profile/page1/{id}', function () {
    return view('page1');
});
Route::get('/adminshow', function () {
    return view('adminshow');
});
Route::get('/profile/newpass', function () {
    return view('newpass');
});
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

Route::post('/zakaz/zayavka/act/submit','ActController@submit')->name('vozduh');
Route::post('/zakaz/zayavka/act/submit1','ActController@submit1')->name('smiv');
Route::post('/zakaz/zayavka/act/submit2','ActController@submit2')->name('obr');
Route::post('/zakaz/zayavka/act/vozduh', 'ActController@index')->name('vozduh');
Route::post('/zakaz/zayavka/act/smiv', 'ActController@index1')->name('smiv');
Route::post('/zakaz/zayavka/act/obr', 'ActController@index2')->name('obr');

Route::get('/zakaz/zayavka/products/{type}', 'TypeController@getProducts');

Route::get('/profile/{id}', 'DeleteController@getProducts');
Route::get('/adminshow/{id}', 'Change1Controller@getProducts');
Route::get('/adminshow1/{id}', 'Change2Controller@getProducts1');

Route::post('/profile/dlya_zayavki/submit','ZayavController@submit')->name('home');
Route::post('/zakaz/zayavka/submit','ZayavkaController@submit')->name('products');
Route::post('/zakaz/zayavka/products/submit','ZayavkaprodController@submit')->name('products');
Route::post('/zakaz/zayavka/otbor/obrazez/submit','ObrazezController@submit')->name('obrazez');
Route::post('/zakaz/zayavka/otbor/obrazez/submit1','ObrazezController@submit1')->name('done');
Route::post('/zakaz/zayavka/otbor/submit','OtborController@submit')->name('otbor');
Route::post('/zakaz/zayavka/otbor/obrazez','OtborController@index')->name('obrazez');
Route::get('/zakaz/zayavka/otbor/obrazez','ObrazezController@index')->name('obrazez');
Route::post('/zakaz/zayavka/products/submit1','ZayavkaprodController@submit1')->name('otbor');
Route::post('/zakaz/zayavka/products/submit2','ZayavkaprodController@submit2')->name('done');
Auth::routes();

Route::get('/profile/update_zayavki/submit','ZayavUpdateController@index');
Route::get('/profile/update_zayavki/edit','ZayavUpdateController@show');
Route::post('/profile/update_zayavki/edit','ZayavUpdateController@edit');

Route::post('/profile/edit/submit','ProfileUpdateController@submit')->name('home');
Auth::routes();

Route::get('/profile/edit/submit','ProfileUpdateController@index');
Route::get('/profile/edit/edit','ProfileUpdateController@show');
Route::post('/profile/edit/edit','ProfileUpdateController@edit');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ZayavController@index')->name('profile');

Route::post('/zakaz/zayavka/products', 'ZayavkaController@index')->name('products');
Route::post('/zakaz/zayavka/otbor', 'ZayavkaController@index1')->name('otbor');
Route::post('/zakaz/zayavka/done', 'ObrazezController@index1')->name('done');


Route::get('/profile', 'ZayavUpdateController@index1')->name('profile');
Route::get('logout','Auth\LoginController@logout');

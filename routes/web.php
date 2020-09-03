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

Route::get('/', function () {
    return view('home');
});

//Rutas de Permisos
Route::get('/permissions/all', 'PermissionsContr@index');
Route::get('/permissions/{id}', 'PermissionsContr@show');
Route::post('/permissions', 'PermissionsContr@store');
Route::delete('/permissions/delete/{id}', 'PermissionsContr@destroy');
Route::put('/permissions/{id}', 'PermissionsContr@update');


//Rutas de Transaction
Route::get('/transaction/all', 'TransactionContr@index');
Route::get('/transaction/{id}', 'TransactionContr@show');
Route::post('/transaction', 'TransactionContr@store');
Route::delete('/transaction/delete/{id}', 'TransactionContr@destroy');
Route::put('/transaction/{id}', 'TransactionContr@update');


//Rutas de User
Route::get('/user/all', 'UserContr@index');
Route::get('/user/{id}', 'UserContr@show');
Route::post('/user', 'UserContr@store')->name('user.store');
Route::delete('/user/delete/{id}', 'UserContr@destroy');
Route::put('/user/{id}', 'UserContr@update');


//Rutas de UserAddress
Route::get('/userAddress/all', 'UserAddressContr@index');
Route::get('/userAddress/{id}', 'UserAddressContr@show');
Route::post('/userAddress', 'UserAddressContr@store');
Route::delete('/userAddress/delete/{id}', 'UserAddressContr@destroy');
Route::put('/userAddress/{id}', 'UserAddressContr@update');


//Rutas de ProductComment
Route::get('/productComment/all', 'ProductCommentContr@index');
Route::get('/productComment/{id}', 'ProductCommentContr@show');
Route::post('/productComment', 'ProductCommentContr@store');
Route::delete('/productComment/delete/{id}', 'ProductCommentContr@destroy');
Route::put('/productComment/{id}', 'ProductCommentContr@update');


//Rutas de Announcement
Route::get('/announcement/all', 'AnnouncementContr@index');
Route::get('/announcement/{id}', 'AnnouncementContr@show');
Route::post('/announcement', 'AnnouncementContr@store');
Route::delete('/announcement/delete/{id}', 'AnnouncementContr@destroy');
Route::put('/announcement/{id}', 'AnnouncementContr@update');


//Rutas de PaymentMethod
Route::get('/paymentMethod/all', 'PaymentMethodContr@index');
Route::get('/paymentMethod/{id}', 'PaymentMethodContr@show');
Route::post('/paymentMethod', 'PaymentMethodContr@store');
Route::delete('/paymentMethod/delete/{id}', 'PaymentMethodContr@destroy');
Route::put('/paymentMethod/{id}', 'PaymentMethodContr@update');


//Rutas de Rol
Route::get('/rol/all', 'RolContr@index');
Route::get('/rol/{id}', 'RolContr@show');
Route::post('/rol', 'RolContr@store');
Route::delete('/rol/delete/{id}', 'RolContr@destroy');
Route::put('/rol/{id}', 'RolContr@update');


#Route::get('/home', 'HomeController@index')->name('home');

//Rutas de vistas
Route::get('registro', function(){
        return view('register');
})->name('register');

Route::get('ingresar', function(){
    return view('login');
})->name('login');

Route::get('publicación', function(){
    return view('announcement');
})->name('announcement');
Auth::routes();



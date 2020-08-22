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
    return view('welcome');
});

//Rutas de Permisos
Route::get('/permissions/all', 'PermissionsContr@index');
Route::get('/permissions/{id}', 'PermissionsContr@show');
Route::post('/permissions', 'PermissionsContr@store');
Route::delete('/permissions/delete/{id}', 'PermissionsContr@destroy');
Route::post('/permissions/{id}', 'PermissionsContr@update');


//Rutas de Transaction
Route::get('/transaction/all', 'TransactionContr@index');
Route::get('/transaction/{id}', 'TransactionContr@show');
Route::post('/transaction', 'TransactionContr@store');
Route::delete('/transaction/delete/{id}', 'TransactionContr@destroy');
Route::post('/transaction/{id}', 'TransactionContr@update');


//Rutas de User
Route::get('/user/all', 'UserContr@index');
Route::get('/user/{id}', 'UserContr@show');
Route::post('/user', 'UserContr@store');
Route::delete('/user/delete/{id}', 'UserContr@destroy');
Route::post('/user/{id}', 'UserContr@update');


//Rutas de UserAddress
Route::get('/userAddress/all', 'UserAddressContr@index');
Route::get('/userAddress/{id}', 'UserAddressContr@show');
Route::post('/userAddress', 'UserAddressContr@store');
Route::delete('/userAddress/delete/{id}', 'UserAddressContr@destroy');
Route::post('/userAddress/{id}', 'UserAddressContr@update');


//Rutas de ProductComment
Route::get('/productComment/all', 'ProductCommentContr@index');
Route::get('/productComment/{id}', 'ProductCommentContr@show');
Route::post('/productComment', 'ProductCommentContr@store');
Route::delete('/productComment/delete/{id}', 'ProductCommentContr@destroy');
Route::post('/productComment/{id}', 'ProductCommentContr@update');


//Rutas de Announcement
Route::get('/announcement/all', 'AnnouncementContr@index');
Route::get('/announcement/{id}', 'AnnouncementContr@show');
Route::post('/announcement', 'AnnouncementContr@store');
Route::delete('/announcement/delete/{id}', 'AnnouncementContr@destroy');
Route::post('/announcement/{id}', 'AnnouncementContr@update');


//Rutas de PaymentMethod
Route::get('/paymentMethod/all', 'PaymentMethodContr@index');
Route::get('/paymentMethod/{id}', 'PaymentMethodContr@show');
Route::post('/paymentMethod', 'PaymentMethodContr@store');
Route::delete('/paymentMethod/delete/{id}', 'PaymentMethodContr@destroy');
Route::post('/paymentMethod/{id}', 'PaymentMethodContr@update');


//Rutas de Rol
Route::get('/rol/all', 'RolContr@index');
Route::get('/rol/{id}', 'RolContr@show');
Route::post('/rol', 'RolContr@store');
Route::delete('/rol/delete/{id}', 'RolContr@destroy');
Route::post('/rol/{id}', 'RolContr@update');


//Rutas de RolPermissions
Route::get('/rolPermissions/all', 'RolPermissionsContr@index');
Route::get('/rolPermissions/{id}', 'RolPermissionsContr@show');
Route::post('/rolPermissions', 'RolPermissionsContr@store');
Route::delete('/rolPermissions/delete/{id}', 'RolPermissionsContr@destroy');
Route::post('/rolPermissions/{id}', 'RolPermissionsContr@update');


//Rutas de TransactionProduct
Route::get('/transactionProduct/all', 'TransactionProductContr@index');
Route::get('/transactionProduct/{id}', 'TransactionProductContr@show');
Route::post('/transactionProduct', 'TransactionProductContr@store');
Route::delete('/transactionProduct/delete/{id}', 'TransactionProductContr@destroy');
Route::post('/transactionProduct/{id}', 'TransactionProductContr@update');


//Rutas de UserProduct
Route::get('/userProduct/all', 'UserProductContr@index');
Route::get('/userProduct/{id}', 'UserProductContr@show');
Route::post('/userProduct', 'UserProductContr@store');
Route::delete('/userProduct/delete/{id}', 'UserProductContr@destroy');
Route::post('/userProduct/{id}', 'UserProductContr@update');



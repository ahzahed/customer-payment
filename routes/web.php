<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

//Service
Route::get('/invoice', 'InvoiceController@index')->name('invoice');
Route::get('/invoice/add', 'InvoiceController@invoiceAdd');
Route::post('/invoice/add', 'InvoiceController@invoiceStore')->name('invoice.add');

Route::get('/invoice/delete/{id}', 'InvoiceController@invoiceDelete');
Route::post('/invoice/update/{id}', 'InvoiceController@invoiceUpdate')->name('invoice.update');
Route::get('/invoice/view/{id}', 'InvoiceController@invoiceView')->name('invoice.view');

//payment
Route::get('payment/process/{id}', 'PaymentController@payment')->name('payment.process');
Route::post('stripe/charge/{id}', 'PaymentController@stripeCharge');
Route::get('payment/view', 'InvoiceController@paymentView')->name('payment.view');

//generate invoice pdf
Route::get('invoice/download/{id}', 'InvoicePDFController@previewPDF');

/* Add User by admin */
Route::get('/add/user/by/admin', 'AddUserController@adduser_byadmin')->name('adduser_byadmin');
Route::post('/add/user/by/admin', 'AddUserController@adduser_byadmin_store')->name('adduser_byadmin.add');
Route::get('/user/role/delete/{id}', 'AddUserController@userroleDelete');

//User Role
Route::get('/user/role', 'AddUserController@userrole')->name('userrole');
//User Role
Route::get('/dashboard', 'dashboardController@dashboard')->name('dashboard');

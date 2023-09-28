<?php
use App\Mail\DataSend;
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
    return view('pages.index');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/new', function () {
    return view('pages.admin.new');
});

Route::get('/email', function () {
    return new DataSend();
});

Route::get('/gue', function () {
    return new App\Mail\GuestContactMail('This is a testing mail','dmasterkay@gmail.com');
});

Route::get('/home', 'PagesController@index')->name('home');
Route::post('/d', 'DataPlanController@send')->name('send');
Route::post('/cable', 'CableSubController@send')->name('cable');
Route::post('/con', 'AirtimeConvertController@convert')->name('con');
Route::post('/t', 'FreeController@trans')->name('trans')->middleware('auth');
Route::post('/c', 'FreeController@contact')->name('con');


Route::post('/s', 'SmsController@getUserNumber');

//Pages
Route::get('/sms', 'PagesController@sms');
Route::get('/airtime-to-cash', 'PagesController@airtime');
Route::get('/fund-wallet', 'PagesController@fundWallet');
Route::get('/topup', 'PagesController@mobileTopup');
//Route::get('/cable-subscription', 'PagesController@cableSub');
Route::get('/profile', 'PagesController@pro');
Route::get('/wallet-transfer', 'PagesController@trans');
Route::get('/history', 'PagesController@cabledata');
Route::get('/cax', 'PagesController@ajc');
Route::get('/payment-history', 'PagesController@hist');
Route::get('/paystack', 'PagesController@paystack');
Route::get('/flutterwave', 'PagesController@flutterwave');
Route::get('/monnify', 'PagesController@monnify');

Route::get('/data-plan', 'DataPlanController@list');
Route::get('/getsubdata/{id}', 'DataPlanController@getsubdata');

Route::get('/cable-subscription', 'CableSubController@list');
Route::get('/getsubcable/{id}', 'CableSubController@getsubcable');

//admin
Route::get('/admin/', 'AdminController@index');
Route::get('/admin/members', 'AdminController@members');
Route::get('/admin/buyhistory', 'AdminController@buying_all');
Route::get('/admin/cablehistory', 'AdminController@cable_buy_all');
Route::get('/admin/paymenthistory', 'AdminController@payment_all');
Route::get('/admin/cable_option', 'AdminCableController@index');
Route::get('/admin/data_option', 'AdminDataController@index');
Route::get('/admin/ban/{id}', 'AdminController@ban');
Route::get('/admin/unban/{id}', 'AdminController@unban');

Auth::routes();

/*Route::post('/pay', [
    'uses' => 'PaymentController@redirectToGateway',
    'as' => 'pay'
]);*/

// Laravel 5.1.17 and above
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

//flutterwave
//Route::post('/payment', 'RaveController@initialize')->name('payment');
Route::match(['GET', 'POST'],'/payment', 'RaveController@initialize')->name('payment');
Route::get('/rave/callback', 'RaveController@callback')->name('callback');
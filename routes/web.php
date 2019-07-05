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
Route::get('contact', function () {
    return view('contact');
});
Route::get('figures', function () {
    return view('about-us.figures');
});
Route::get('stock', function () {
    return view('trade.stock');
});
Route::get('forex', function () {
    return view('trade.forex');
});
Route::get('options', function () {
    return view('trade.options');
});
Route::get('cryptocurrencies', function () {
    return view('trade.cryptocurrencies');
});
Route::get('assets', function () {
    return view('traders.assets');
});

Route::get('collection', function () {
    return view('traders.collection');
});

Route::get('industries', function () {
    return view('traders.industries');
});

Route::get('news', function () {
    return view('traders.news');
});

Route::get('turnaments', function () {
    return view('traders.turnaments');
});

Route::get('historical', function () {
    return view('traders.historical');
});

Route::get('video', function () {
    return view('traders.video');
});

Route::get('calenders', function () {
    return view('traders.calenders');
});

Route::get('help', function () {
    return view('help.help');
});

Route::get('withdrawing-funds', function () {
    return view('help.withdrawing-funds');
});

Route::get('trading', function () {
    return view('help.trading');
});

Route::get('depositing-funds', function () {
    return view('help.depositing-funds');
});

Route::get('tournaments', function () {
    return view('help.tournaments');
});

Route::get('account', function () {
    return view('help.account');
});

Route::get('verification', function () {
    return view('help.verification');
});


Route::get('download', function () {
    return view('traders.download');
});

Route::get('trading-hours-and-fees', function () {
    return view('traders.trading-hours-and-fees');
});

Route::get('payment-methods', function () {
    return view('traders.payment-methods');
});

Route::get('press', function () {
    return view('about-us.press');
});

Route::get('awards', function () {
    return view('about-us.awards');
});


Auth::routes();

Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('home','HomeController@getHomePage');
Route::get('login','HomeController@getLoginPage');
Route::post('awards','HomeController@getAwardPage');
Route::get('register','HomeController@getRegisterPage');
Route::get('stock','HomeController@getStockPage');

Route::get('charity','HomeController@getCharityPage');
Route::get('careers','HomeController@getCarerrsPage');

// Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function() {
Route::get('admin','AdminController@getAdminPage');
Route::get('admin/clients','AdminController@getclientsPage');
Route::get('admin/add-clients','AdminController@getAddClientPage');
Route::post('admin/add-clients','AdminController@getAddClientsPage');
Route::get('admin/home','AdminController@getHomePage');

// });


Route::get('user','UserController@getUserPage');
Route::get('users/dashboard','UserController@getDashboardPage');
Route::get('users/personal','UserController@getPersonalPage');
Route::post('users/personals','UserController@getPersonalsPage');
Route::get('users/verification','UserController@getVerificationPage');
Route::get('users/portfolio','UserController@getPortfolioPage');
Route::get('users/withdraw-funds','UserController@getWithdrawFundsPage');
Route::get('users/trading-history','UserController@getTradingHistoryPage');
Route::get('users/contact-support','UserController@getContactSupportPage');

Route::get('users/profile/account-settings','UserController@getAccountSettingsPage');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

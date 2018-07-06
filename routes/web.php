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
    return view('inicial');
});

Auth::routes();

Route::prefix('/hemocentro/')->name('hemocentro.')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('profile', 'HemocentroController@index')->name('profile');
    Route::post('profile/edit', 'HemocentroController@edit')->name('profile.edit');

    Route::get('user/profile', 'UserController@profile')->name('user.profile');
    Route::post('user/profile/edit', 'UserController@edit')->name('user.profile.edit');

    Route::get('campaigns', 'CampaignController@index')->name('campaigns');
    Route::get('campaigns/new', 'CampaignController@new')->name('campaigns.new');
    Route::post('campaigns/insert', 'CampaignController@insert')->name('campaigns.insert');
    Route::get('campaigns/edit/{id}', 'CampaignController@edit')->name('campaigns.edit');
    Route::post('campaigns/update', 'CampaignController@update')->name('campaigns.update');

    Route::get('donations.register', 'DonationController@register')->name('donations.register');
});


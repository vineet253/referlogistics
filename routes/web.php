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


/* admin url start */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'admin','prefix'=>'admin'], function() {

Route::group(['middleware' => ['auth']], function() { 
		    Route::get('customer-list',  'CustomerController@index')->name('customer-list');
		    Route::get('add-customer',  'CustomerController@add_customer')->name('add-customer');
		    Route::post('add-customer',  'CustomerController@add_customer')->name('add-customer');
		    Route::get('edit-customer/{id}',  'CustomerController@edit_customer')->name('edit-customer');
			Route::post('edit-customer/{id}',  'CustomerController@edit_customer')->name('edit-customer');
			Route::post('delete-customer',  'AjaxController@delete_customer')->name('delete-customer');


			Route::get('vendor-list',  'VendorController@index')->name('vendor-list');
		    Route::get('add-vendor',  'VendorController@add_vendor')->name('add-vendor');
		    Route::post('add-vendor',  'VendorController@add_vendor')->name('add-vendor');
		    Route::get('edit-vendor/{id}',  'VendorController@edit_vendor')->name('edit-vendor');
			Route::post('edit-vendor/{id}',  'VendorController@edit_vendor')->name('edit-vendor');
			Route::post('delete-vendor',  'AjaxController@delete_vendor')->name('delete-vendor');



			Route::get('track-list',  'TrackController@index')->name('track-list');
			Route::get('add-track',  'TrackController@add_track')->name('add-track');
			Route::post('add-track', 'TrackController@add_track')->name('add-track');
			Route::get('edit-track/{id}',  'TrackController@edit_track')->name('edit-track');
			Route::post('edit-track/{id}',  'TrackController@edit_track')->name('edit-track');
			Route::post('delete-track',  'AjaxController@delete_track')->name('delete-track');


			Route::get('branch-list',  'BranchController@index')->name('branch-list');
			Route::get('add-branch',  'BranchController@add_branch')->name('add-branch');
			Route::post('add-branch', 'BranchController@add_branch')->name('add-branch');
			Route::get('edit-branch/{id}',  'BranchController@edit_branch')->name('edit-branch');
			Route::post('edit-branch/{id}',  'BranchController@edit_branch')->name('edit-branch');
			Route::post('delete-branch',  'AjaxController@delete_branch')->name('delete-branch');


			Route::get('docket-list',  'DocketController@index')->name('docket-list');
			Route::get('add-docket',  'DocketController@add_docket')->name('add-docket');
			Route::post('add-docket', 'DocketController@add_docket')->name('add-docket');
			Route::get('edit-docket/{id}',  'DocketController@edit_docket')->name('edit-docket');
			Route::post('edit-docket/{id}',  'DocketController@edit_docket')->name('edit-docket');
			Route::post('delete-docket',  'AjaxController@delete_docket')->name('delete-docket');





	});
});



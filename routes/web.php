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
      
Route::post('/password-request', 'UserController@resetPassword')->name('password-request');
Route::post('save-user-info', 'DeshboardController@saveUserInfo')->name('save-user-info');

Route::get('/', 'DeshboardController@index')->name('/');

Route::get('user-login', 'DeshboardController@userLogin')->name('user-login');
Route::get('user-registration', 'DeshboardController@userReg')->name('user-ragistration');
Route::post('save-user-info', 'DeshboardController@saveUserInfo')->name('save-user-info');



Route::get('news', 'NewsController@news')->name('news');
Route::get('news/details/{id}', 'NewsController@newsDetails')->name('news-details');



Route::group(['middleware' => ['auth', 'verified:ture']], function () {
    
    Route::get('user/profile', 'UserController@userProfile')->name('user-profile');
    Route::get('user/profile/edit', 'UserController@editUserProfile')->name('edit-profile');
    Route::get('user/password-change', 'UserController@changePassword')->name('password-change');
    Route::post('user/update-password', 'UserController@updatePassword')->name('update-password');
    Route::post('user/update-profile', 'UserController@updateProfile')->name('update-profile');

        Route::group(['middleware' => 'role:Admin'], function () {

            Route::get('GD/application/list', 'GDApplicatioController@GD_application_list')->name('GD_application_list');
            Route::get('GD/application/preview/{id}', 'GDApplicatioController@GD_application_preview')->name('GD_application_preview');
            Route::get('GD/Clearance/list', 'GDApplicatioController@Clearance_list')->name('clearance_list');
            Route::get('GD/Clearance/preview/{id}', 'GDApplicatioController@Clearance_preview')->name('clearance_preview');

            Route::get('use-my-info', 'GDApplicatioController@useMyInfo');


            Route::get('news/add', 'NewsController@addNews')->name('add-news');
            Route::post('news/save', 'NewsController@saveNews')->name('save-news-info');
            Route::get('news/list', 'NewsController@listOfNews')->name('news_list');
            Route::get('news/delete/{id}', 'NewsController@deleteNews')->name('news-delete');
            Route::get('news/edit/{id}', 'NewsController@editNews')->name('news-edit');
            Route::post('news/update', 'NewsController@updateNews')->name('update-news-info');
            
            Route::get('add/vehicle', 'VehicleController@addVehicle')->name('add-vehicle');
            Route::post('save/vehicle/info', 'VehicleController@saveVehicle')->name('save-vehicle-info');
            Route::get('list/vehicle', 'VehicleController@listVehicle')->name('vehicle_list');
            Route::get('search/vehicle', 'VehicleController@searchVehicle')->name('search-vehicle');
            Route::post('search/vehicle/info', 'VehicleController@searchVehicleInfo')->name('search-vehicle-info');

            
        });
        Route::group(['middleware' => 'role:User'], function () {


                
        });
        Route::group(['middleware' => 'role:Admin|User'], function () {
            Route::get('GD/application', 'GDApplicatioController@GD_application_page')->name('GD_application_page');
            Route::post('save/GD/application', 'GDApplicatioController@save_GD_application_page')->name('save-gd-application-info');
            Route::post('save/clearance/application', 'GDApplicatioController@save_clearance_application_page')->name('save-clearance-application-info');

            Route::get('GD/Clearance_page', 'GDApplicatioController@Clearance_page')->name('Clearance_page');

            
        
    });

});
Auth::routes(['verify' => true]);
// Auth::routes();

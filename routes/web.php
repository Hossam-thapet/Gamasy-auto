<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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
    // dd(Request::url(),'ar');
    return view('welcome');
    
});


Route::redirect('/', 'en');

Route::group(['prefix' => '{language}'], function () {
    Route::get('/','CarController@indexwelcome');
    Route::get('/search','SrearchController@index');
    Route::get('/find','SrearchController@indexBrowse');
    Route::get('/pricerange','SrearchController@Pricerange');
    Route::get('/class','Classfication@class');
    Route::get('/lower','Classfication@lowerprice');
    Route::get('/higher','Classfication@higherprice');
    Route::get('/recent','Classfication@recent');
    Route::get('/users','UserController@show');
    Route::get('/api/cars/{brand}','ApiController@index');
    Route::get('/api/subcategry/{brand}','ApiController@subcategories');
    Route::get('/api/cat/{id}','ApiController@subcategory');
    Route::get('/api/image/{id}','ApiController@carImage');
    Route::get('/compare{id}','CompareController@compare');
    //  Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/cars','CarController');
    

    Auth::routes();
});
Route::post('/upload_image/{id}','ImageController@store');
Route::DELETE('/upload_image/delete/{id}','ImageController@destroy');
Route::DELETE('/sub_category/delete/{id}','SubcategoryController@destroy');
Route::get('/pdf/{id}/cat/{idcar}','PDFController@generatePDF');
Route::post('/sub_category/{id}','SubcategoryController@store');



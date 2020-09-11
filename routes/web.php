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
Route::group(['namespace'=>'Auth','prefix'=>'account'],function (){
    Route::get('register','RegisterController@getFormRegister')->name('get.register');
    Route::post('register','RegisterController@postFormRegister');

    Route::get('login','LoginController@getFormLogin')->name('get.login');
    Route::post('login','LoginController@postFormLogin');

    Route::get('logout','LoginController@getLogout')->name('get.logout');
});

Route::group(['prefix' => 'admin','namespace'=>'Admin'], function(){
    Route::get('/',function (){
        return view('admin.dashboard');
    });
    /**
     * Route danh mục sản phẩm
     */
    Route::group(['prefix' => 'category'], function (){
        Route::get('/', 'AdminCategoryController@index')->name('admin.category.index');
        Route::get('create', 'AdminCategoryController@create')->name('admin.category.create');
        Route::post('create', 'AdminCategoryController@store');

        Route::get('update/{id}', 'AdminCategoryController@edit')->name('admin.category.edit');
        Route::post('update/{id}', 'AdminCategoryController@update');

//        Route::get('active/{id}', 'AdminCategoryController@active')->name('admin.category.active');
        Route::get('hot/{id}', 'AdminCategoryController@hot')->name('admin.category.hot');
        Route::get('status/{id}', 'AdminCategoryController@status')->name('admin.category.status');
        Route::get('delete/{id}', 'AdminCategoryController@destroy')->name('admin.category.delete');
    });
    /**
     * Route keyword
     */
    Route::group(['prefix' => 'keyword'], function (){
        Route::get('/', 'AdminKeywordController@index')->name('admin.keyword.index');
        Route::get('create', 'AdminKeywordController@create')->name('admin.keyword.create');
        Route::post('create', 'AdminKeywordController@store');

        Route::get('update/{id}', 'AdminKeywordController@edit')->name('admin.keyword.edit');
        Route::post('update/{id}', 'AdminKeywordController@update');

//        Route::get('active/{id}', 'AdminCategoryController@active')->name('admin.category.active');
        Route::get('hot/{id}', 'AdminKeywordController@hot')->name('admin.keyword.hot');
        Route::get('status/{id}', 'AdminKeywordController@status')->name('admin.keyword.status');
        Route::get('delete/{id}', 'AdminKeywordController@destroy')->name('admin.keyword.delete');

    });
    Route::group(['prefix' => 'attribute'], function () {
        Route::get('/', 'AdminAttributeController@index')->name('admin.attribute.index');
        Route::get('create', 'AdminAttributeController@create')->name('admin.attribute.create');
        Route::post('create', 'AdminAttributeController@store');

        Route::get('update/{id}', 'AdminAttributeController@edit')->name('admin.attribute.edit');
        Route::post('update/{id}', 'AdminAttributeController@update');

//        Route::get('active/{id}', 'AdminCategoryController@active')->name('admin.category.active');
        Route::get('hot/{id}', 'AdminAttributeController@hot')->name('admin.attribute.hot');
        Route::get('status/{id}', 'AdminAttributeController@status')->name('admin.attribute.status');
        Route::get('delete/{id}', 'AdminAttributeController@destroy')->name('admin.attribute.delete');
    });
        /**
         * Route sản phẩm
         */
    Route::group(['prefix' => 'product'], function (){
        Route::get('/', 'AdminProductController@index')->name('admin.product.index');
        Route::get('create', 'AdminProductController@create')->name('admin.product.create');
        Route::post('create', 'AdminProductController@store');

        Route::get('update/{id}', 'AdminProductController@edit')->name('admin.product.edit');
        Route::post('update/{id}', 'AdminProductController@update');

        Route::get('active/{id}', 'AdminProductController@active')->name('admin.product.active');
        Route::get('hot/{id}', 'AdminProductController@hot')->name('admin.product.hot');
        Route::get('status/{id}', 'AdminProductController@status')->name('admin.product.status');
        Route::get('delete/{id}', 'AdminProductController@destroy')->name('admin.product.delete');
    });
    Route::group(['prefix'=>'transaction'],function (){
       Route::get('','AdminTransaction@index')->name('get.transaction');
    });

});

Route::group(['namespace'=>'Frontend'],function (){
    Route::get('','HomeController@index')->name('home');
    Route::get('san-pham','ProductController@index')->name('get.product.list');
    Route::get('san-pham/{slug}/{id}','ProductDetailController@detail')->name('get.detail.product.list');
    Route::get('don-hang','CartController@index')->name('get.cart');
    Route::get('/add-cart/{id}', 'CartController@AddCart')->name('add.cart');
    Route::get('/delete-item/{id}', 'CartController@DeleteItemCart');
    Route::get('/list-cart', 'CartController@ViewListCart')->name('list.cart');
    Route::get('/delete-list-cart/{id}', 'CartController@DeleteItemListCart');
    Route::get('/update-list-cart/{id}', 'CartController@UpdateCart');
    Route::get('/update-list-cart-down/{id}', 'CartController@UpdateCartDownAJax');
    Route::get('/destroy-cart', 'CartController@destroy');
    Route::get('/thanh-toan', 'CartController@payment')->name('get.payment');
    Route::post('/thanh-toan', 'CartController@postPayment');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('get.home');



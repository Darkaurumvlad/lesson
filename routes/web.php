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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('main');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController');
    });

    Route::group(['namespace' => 'Culture', 'prefix' => 'cultures'], function () {
        Route::get('/', 'IndexController')->name('admin.culture.index');
        Route::get('/create', 'CreateController')->name('admin.culture.create');
        Route::post('/create', 'StoreController')->name('admin.culture.store');
        Route::get('/{culture}', 'ShowController')->name('admin.culture.show');
        Route::get('/{culture}/edit', 'EditController')->name('admin.culture.edit');
        Route::patch('/{culture}/', 'UpdateController')->name('admin.culture.update');
        Route::delete('/{culture}/', 'DeleteController')->name('admin.culture.delete');
    });

    Route::group(['namespace' => 'Product', 'prefix' => 'products'], function () {
        Route::get('/', 'IndexController')->name('admin.product.index');
        Route::get('/create', 'CreateController')->name('admin.product.create');
        Route::post('/', 'StoreController')->name('admin.product.store');
        Route::get('/{product}', 'ShowController')->name('admin.product.show');
        Route::get('/{product}/edit', 'EditController')->name('admin.product.edit');
        Route::patch('/{product}', 'UpdateController')->name('admin.product.update');
        Route::delete('/{product}', 'DeleteController')->name('admin.product.delete');
    });

    Route::group(['namespace' => 'Client', 'prefix' => 'clients'], function () {
        Route::get('/', 'IndexController')->name('admin.client.index');
        Route::get('/create', 'CreateController')->name('admin.client.create');
        Route::post('/', 'StoreController')->name('admin.client.store');
        Route::get('/{client}', 'ShowController')->name('admin.client.show');
        Route::get('/{client}/edit', 'EditController')->name('admin.client.edit');
        Route::patch('/{client}', 'UpdateController')->name('admin.client.update');
        Route::delete('/{client}', 'DeleteController')->name('admin.client.delete');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });

    Route::group(['namespace' => 'Basket', 'prefix' => 'basketproducts'], function () {
        Route::get('/', 'BasketproductController@index')->name('admin.basketproduct.index');
        Route::post('/{id}/restore', 'BasketproductController@restore')->name('admin.basketproduct.restore');

    });
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

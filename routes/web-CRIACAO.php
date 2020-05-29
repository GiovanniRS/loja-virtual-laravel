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
    return view('site\home');
})->name('home');

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.',
], function () {

    Route::get('/', function() {
        return redirect()->route('panel');
    });

    Route::get('/panel', function() {
        return view('admin\home');
    })->name('panel');

    Route::resource('category', 'CategoryController');

    Route::resource('subcategory', 'SubcategoryController');

    Route::resource('product', 'ProductController');
    
    Route::resource('client', 'ClientsController');

    Route::resource('user', 'UserController');
});

// Route::get('/{category}', function ($category) {
//     dd($category);
// })->name('category');

Auth::routes();

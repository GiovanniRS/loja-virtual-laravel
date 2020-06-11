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

    Route::get('painel', function() {
        return view('admin\home');
    })->name('panel');

    Route::resource('categorias', 'CategoryController')->names('categories')->parameters(['categorias' => 'categories']);

    // Route::resource('subcategorias', 'SubcategoryController')->names('subcategories')->parameters(['subcategorias' => 'subcategories']);

    Route::resource('produtos', 'ProductController')->names('products')->parameters(['produtos' => 'products']);

    Route::delete('produtos/images/{id}', 'ProductController@destroyImage')->name('products.destroyImage');
    
    // Route::resource('clientes', 'ClientController')->names('clients')->parameters(['clientes' => 'clients']);

    // Route::resource('usuarios', 'UserController')->names('users')->parameters(['usuarios' => 'users']);
});

Auth::routes();

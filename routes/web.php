<?php

// use Illuminate\Support\Facades\Route;

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

// Route::get('/menu', function () {
//     return view('layouts.menu');
// });
// Route::get('/test', function () {
//     return view('content');
// });

Route::get('product-detail/{id}', 'ProductController@show');

//show list products in user page
Route::get('layouts.menu', 'ProductController@list');


Auth::routes();

//show list users in admin page
Route::get('test', 'UserController@index');



//show list users in admin page
Route::get('test', 'UserController@index');



Auth::routes();


Route::get('/', function () {
	return view('welcome');
});

Route::get('/menu', function () {
	return view('layouts.menu');
});
// Route::get('/test', function () {
//     return view('content');
// });


Route::get('home', function() {
	return view('store.homepage');
})->name('home');
Route::get('contact', function() {
	return view('store.contact');
})->name('contact');

Route::get('product-detail/{id}', 'ProductController@show');


Route::group(['prefix' => 'cart'], function() {
	Route::get('/', 'OrderController@viewCart');
	Route::get('/{id}', 'OrderController@destroyItems');
	Route::post('/add', 'OrderController@addcart');
});
//test blade
Route::get('v1', function(){
	return view('store.homepage');
});	

//group route product
Route::group(['prefix' => 'product'], function() {
	Route::get('/', 'ProductController@view')->name('product');

    // return view add product
	Route::get('viewadd', 'ProductController@viewadd')->name('viewadd');

	//postvalue to create product
	Route::post('addProduct', 'ProductController@addProduct')->name('addProduct');

	//return view edit product
	Route::get('viewedit/{id}', 'ProductController@viewedit');

	Route::post('editProduct/{id}', 'ProductController@editProduct');

	Route::post('delete/{id}', 'ProductController@delete');
});
Route::get('login', 'AccountController@loginForm')->name('auth.login');
Route::post('login', 'AccountController@postLogin')->name('auth.post-login');
Route::get('register', 'AccountController@register')->name('register');
Route::post('register', 'AccountController@save')->name('register.save');
Route::get('/logout','AccountController@logout')->name('logout');

Route::get('admin',function(){
	return view('admin');
})->middleware('admin.check')->name('admin');
Route::get('/users',function(){
	return view('users');
})->name('users');
Route::get('forbidden', function(){
	return view('auth.403');
})->name('forbidden');


//group route product
Route::group(['prefix' => 'order'], function() {
	Route::get('/', 'OrderController@view')->name('order');

	Route::get('state', 'OrderController@changeState')->name('changeState');
	Route::post('/add', 'OrderController@storeOrder');
	Route::get('/test', function(){
		dd(Cart::content());
	});


});


//group route category
Route::group(['prefix' => 'category'], function() {
	Route::get('/', 'CategoryController@view')->name('category');

    // return view add category
	Route::get('add', 'CategoryController@viewAddCategory')->name('viewAddCategory');

	//postvalue to create category
	Route::post('addCategory', 'CategoryController@addCategory')->name('addCategory');

	//return view edit category
	Route::get('edit/{id}', 'CategoryController@viewEditCategory');

	Route::post('editCategory/{id}', 'CategoryController@editCategory');

	Route::post('delete/{id}', 'CategoryController@deleteCategory');
});


//group route post
Route::group(['prefix' => 'post'], function() {
    Route::get('/', 'PostController@view')->name('post');
});

//group route post
Route::group(['prefix' => 'post'], function() {
    Route::get('/', 'PostController@view')->name('post');
});

Route::group(['prefix' => 'blog'], function() {
	Route::get('/', 'PostController@blog');
	Route::get('/{id}', 'PostController@show');
});



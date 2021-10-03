<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

// Route::group(['prefix' => '/'], function () {

// });
//home
Route::get('/', 'homeController@index')->name('home');
Route::get('home', 'homeController@index')->name('home');

// login 
Route::get('login', function () {
    if (session()->has('id')) {
        return redirect('home');
    }
    return view('login');
})->name('login.index');
Route::post('SignUp', 'loginController@signUp')->name('login.signup');
Route::post('login', 'loginController@checkLogin')->name('login.check');
Route::get('logOut', 'loginController@logOut')->name('login.out');


//user 
Route::get('updateUser', 'userController@updateUser')->name('updateUser');
Route::get('updateCurrent', 'userController@updateCurrent')->name('updateCurrent');


//product
Route::get('product', 'productController@index')->name('product');
Route::get('CheckPrice', 'productController@CheckPrice')->name('CheckPrice');
Route::get('sorts', 'productController@Sort')->name('sorts');
Route::get('sortKinds', 'productController@sortKinds')->name('sortKinds');
Route::get('sortSizes', 'productController@sortSizes')->name('sortSizes');

//deltail Product
Route::get('detailProduct/{id}', 'detailsProductController@index')->name('detailProduct');
Route::get('commentDetailProduct', 'detailsProductController@commentDetailProduct')->name('commentDetailProduct');
Route::get('RateProduct', 'detailsProductController@RateProduct')->name('RateProduct');

//cart 
Route::get('cart', 'cartController@index')->name('cart');
Route::get('showCart', 'cartController@showCart')->name('showCart');
Route::get('actionCart', 'cartController@action')->name('actionCart');
Route::get('addCartD', 'cartController@addCartD')->name('addCartD');


//pay product 


//blog
Route::get('blog', 'postController@index')->name('blog');
Route::get('detailPost/{id}', 'postController@show')->name('detailPost');
Route::get('CommentBlog', 'postController@createComment')->name('CommentBlog');



Route::group(['middleware' => ['checkUser']], function () {

    Route::post('payProduct', 'PayProductController@actionPay')->name('payProduct');
    Route::get('vnPayReturn', 'PayProductController@vnPayReturn')->name('vnPayReturn');
    Route::get('MomoReturn', 'PayProductController@MomoReturn')->name('MomoReturn');

    //user
    Route::get('user', function () {
        return view('user');
    })->name('user');

    //blog
    Route::get('postBlog', function () {
        return view('postBlog');
    })->name('postBlog');
    Route::post('addBlog', 'postController@create')->name('addBlog');
    Route::get('feel', 'postController@feel')->name('feel');
});

Route::get('Paydone', function () {
    return view('Paydone');
})->name('Paydone');

Route::get('contact', function () {
    return view('contact');
})->name('contact');



Route::group(['prefix' => 'admin', 'middleware' => ['checkAdmin']], function () {
    Route::get('/', 'adminDashboardController@index')->name('admin');

    //order 
    Route::get('adminOrder' , 'orderController@index')->name('adminOrder');
    Route::get('adminOrderShow' , 'orderController@show')->name('adminOrderShow');
    Route::get('adminOrderSearch' , 'orderController@search')->name('adminOrderSearch');
    Route::get('adminOrderConfim' , 'PayProductController@ConfimPayNomal')->name('adminOrderConfim');

    Route::get('adminSort', function () {
        return view('admin.adminSort');
    })->name('adminSort');

    //admin product
    Route::get('adminAddLisstSort', function () {
        return view('admin.adminAddLisstSort');
    })->name('adminAddLisstSort');

    Route::get('ListProduct', 'productController@ListProductAdmin')->name('ListProduct');
    Route::post('createProduct', 'productController@create')->name('createProduct');
    Route::get('showInf', 'productController@show')->name('showInf');
    Route::post('updateProduct', 'productController@update')->name('updateProduct');
    Route::get('searchProduct', 'productController@searchProduct')->name('searchProduct');
    Route::get('deleteProduct', 'productController@destroy')->name('deleteProduct');
    Route::get('addProduct', 'productController@showAdmin')->name('adminProduct');

    Route::get('addProductImg', 'productController@productImg')->name('addProductImg');
    Route::post('addactionImg', 'productController@actionImg')->name('addactionImg');


    //use 
    Route::get('adminCustomer', 'userController@show')->name('adminCustomer');
    Route::get('adminCustomergetInf', 'userController@getInf')->name('adminCustomergetInf');
    Route::get('adminCustomersearchInf', 'userController@searchInf')->name('adminCustomersearchInf');
    Route::get('adminCustomerdestroy', 'userController@destroy')->name('adminCustomerdestroy');
});



// google and facebook
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

//send email 
Route::post('/sendEmail', 'mailController@sendEmail')->name('sendEmail');

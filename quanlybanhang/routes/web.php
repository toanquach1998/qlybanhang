<?php
use App\Category;
use App\Supplier;
use App\Product;
use App\Customer;
use App\Employee;
use App\Order;
use App\OrderDetail;


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

//Route backend categories  
Route::get('/backend/categories', function()    {
    $list = Category::all();
    dd($list);
});
Route::get('/backend/suppliers', function()    {
    $list = Supplier::all();
    dd($list);
});
Route::get('/backend/products', function()    {
    $list = Product::all();
    return view('backend.products.index')->with('listProduct', $list);
});
Route::get('/backend/customers', function()    {
    $list = Customer::all();
    dd($list);
});
Route::get('/backend/employees', function()    {
    $list = Employee::all();
    dd($list);
});
Route::get('/backend/orders', function()    {
    $list = Order::all();
    dd($list);
});
Route::get('/backend/orders_detail', function()    {
    $list = OrderDetail::all();
    dd($list);
});

Route::get('/admin/dashboard','Backend\PageController@dashboard')
->name('backend.pages.dashboard');
Route::get('/admin/products','Backend\ProductController@index')
->name('backend.products.index');
Route::get('/admin/categories', 'Backend\CategoryController@index')
->name('backend.categories.index');
Route::get('/admin/categories/create','Backend\CategoryController@create')
->name('backend.categories.create');
Route::post('/admin/categories/store','Backend\CategoryController@store')
->name('backend.categories.store');
Route::get('/admin/categories/{id}/edit','Backend\CategoryController@edit')
->name('backend.categories.edit');
Route::post('/admin/categories/{id}/update','Backend\CategoryController@update')
->name('backend.categories.update');

//XOA
Route::delete('/admin/categories/{id}','Backend\CategoryController@destroy')
->name('backend.categories.destroy');

//PRODUCTS
Route::get('/admin/products', 'Backend\ProductController@index')->name('backend.products.index');
Route::get('/admin/products/create', 'Backend\ProductController@create')->name('backend.products.create');
Route::post('/admin/products/store', 'Backend\ProductController@store')->name('backend.products.store');

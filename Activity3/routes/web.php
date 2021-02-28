<?php

use App\Http\Controllers\TestController;

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
    return view('login3');
});

Route::get('/hello', function() {
    return "Hello World";
});

Route::get('/helloworld', function()
{
   return view('helloworld'); 
});

Route::get('/test', 'TestController@test2');

Route::post('/whoami','WhatsMyNameController@index');

Route::get('/askme', function () 
{ 
    return view('whoami'); 
}); 

Route::get('/login', function () 
{ 
    return view('login'); 
}); 

Route::post('/dologin','LoginController@index'); 

Route::get('/login2', function ()
{
    return view('login2');
});

Route::get('/customer', function()
{
    return view('customer');
});

Route::get('/neworder', function ()
{
    return view('order');
});

Route::post('/addorder', 'OrderController@addOrder');

Route::get('/login3', function() 
{
    return view('login3');
});

Route::post('/dologin3', "Login3Controller@index");

Route::post('/addCustomer' , "CustomerController@index");

Route::post('/addOrder', "OrderController@addOrder");

Route::post('/createOrder', "OrderController@createOrder");

?>
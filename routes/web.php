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
    return view('welcome');
});

Route::get('/hello', '\App\Http\Controllers\HelloController@index');

use App\Http\Controllers\HelloController;
Route::get('/hello/view', [HelloController::class, 'view']);
Route::get('/hello/list', [HelloController::class, 'list']);
//Route::redirect('/hello', '/hello/view', 301);

use App\Http\Controllers\ViewController;
Route::get('/view/escape', [ViewController::class, 'escape']);
Route::get('/view/if', [ViewController::class, 'if']);
Route::get('/view/unless', [ViewController::class, 'unless']);
Route::get('/view/isset', [ViewController::class, 'isset']);
Route::get('/view/switch', [ViewController::class, 'switch']);
Route::get('/view/while', [ViewController::class, 'while']);
Route::get('/view/for', [ViewController::class, 'for']);
Route::get('/view/foreach_assoc', [ViewController::class, 'foreach_assoc']);
Route::get('/view/foreach_loop', [ViewController::class, 'foreach_loop']);
Route::get('/view/style_class', [ViewController::class, 'style_class']);
Route::get('/view/checked', [ViewController::class, 'checked']);
Route::get('/view/master', [ViewController::class, 'master']);
Route::get('/view/comp', [ViewController::class, 'comp']);

use App\Http\Controllers\RouteController;
Route::view('/route', 'route.view', ['name'=>'Laravel']);
Route::get('/route/enum_param/{category}', [RouteController::class, 'enum_param']);

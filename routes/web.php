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
Route::get('/hello/list', [HelloController::class, 'list'])
    ->name('list');

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
Route::get('/route/param/{id}', [RouteController::class, 'param'])
  ->name('param');

Route::get('/route/enum_param/{category}', [RouteController::class, 'enum_param']);

use App\Http\Controllers\CtrlController;
use App\Http\Middleware\LogMiddleware;
Route::get('/ctrl/plain', [CtrlController::class, 'plain']);
Route::get('/ctrl/test', [CtrlController::class, 'test']);
Route::get('/ctrl/header', [CtrlController::class,'header']);
Route::get('/ctrl/outJson', [CtrlController::class, 'outJson']);
Route::get('/ctrl/download', [CtrlController::class, 'download']);
Route::get('/ctrl/outImage', [CtrlController::class, 'outImage']);
Route::get('/ctrl/redirectBasic', [CtrlController::class, 'redirectBasic']);
Route::get('/ctrl/redirectRoute', [CtrlController::class, 'redirectRoute']);
Route::get('/ctrl/redirectParam', [CtrlController::class, 'redirectParam']);
Route::get('/ctrl/redirectAction', [CtrlController::class, 'redirectAction']);
Route::get('/ctrl/redirectAway', [CtrlController::class, 'redirectAway']);
Route::get('/ctrl', [CtrlController::class, 'index']);
Route::get('/ctrl/form', [CtrlController::class, 'form']);
Route::post('ctrl/result', [CtrlController::class, 'result']);
Route::get('/ctrl/upload', [CtrlController::class, 'upload']);
Route::post('/ctrl/uploadfile', [CtrlController::class, 'uploadfile']);

Route::group(['middleware'=>['debug',]], function() {
  Route::get('/ctrl/middle', [CtrlController::class, 'middle']);
});
//Route::get('/ctrl/middle', [CtrlController::class, 'middle']);
//  ->middleware(LogMiddleware::class);

Route::fallback(function() {
    return view('route.error');
});

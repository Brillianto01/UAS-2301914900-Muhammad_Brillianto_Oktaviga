<?php

use App\Http\Controllers\AccmanagerController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\statusController;
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
    return view('index');
})->middleware('guest');

Route::get('/login', function () {
    return view('Login.login');
});

Route::get('/register', function () {
    return view('Login.regis');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth');


Route::post('/register', [RegisController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/signout', [LoginController::class, 'signout'])->middleware('auth');

Route::post('/profile', [profileController::class, 'store']);

Route::post('/profile', [profileController::class, 'store']);
Route::get('/home', [bookController::class, 'index']);
Route::get('/detail/{ebook_id}', [bookController::class, 'detail']);
Route::post('/rent', [orderController::class, 'store']);
Route::get('/cart/{account_id}', [orderController::class, 'cart']);
Route::delete('/delete/{order_id}', [orderController::class, 'destroy']);
Route::get('/acc-manager', [AccmanagerController::class, 'index']);
Route::get('/acc-manager/roleupdate/{account_id}', [AccmanagerController::class, 'roleupdate']);
Route::put('/acc-manager/update', [AccmanagerController::class, 'update']);

Route::get('/acc-manager/delete', [AccmanagerController::class, 'delete']);

Route::get('/status-success', [statusController::class, 'success']);
Route::get('/status-saved', [statusController::class, 'saved']);
Route::get('/status-logout', [statusController::class, 'logout']);

<?php

use App\Http\Controllers\membersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
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

Route::post('users', [UsersController::class, 'getData']);
Route::view("login", "users");
Route::get('user', [UserController::class, 'getdata']);

Route::view("reg", "register");
Route::post('add', [membersController::class, 'saveData']);
Route::get('list', [membersController::class, 'showData']);
Route::get('delete/{id}', [membersController::class, 'delete']);
Route::get('edit/{id}', [membersController::class, 'showEditData']);
Route::post('edit', [membersController::class, 'update']);
Route::view("login", "login");
Route::post('login', [membersController::class, 'loginAdmin']);
//Route::get('lgn/{email}', [membersController::class, 'loginAdmin']);

Route::get('login', function () {
    if (session()->has('user')) {
        return redirect('list');
    } else {
        return view('login');
    }
});

Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
        Session::flush();
        $m = session()->flash('message', "Logout Success");
    }
    $m = session()->flash('message', "Logout Success");
    return redirect('login');
});
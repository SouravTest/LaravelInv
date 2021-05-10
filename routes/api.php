<?php
use App\Http\Controllers\apiController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user', [UserController::class, 'getdata']);
Route::post('add', [membersController::class, 'saveData']);

// API FOR REACT

Route::post('register', [apiController::class, 'register']);
Route::post('login', [apiController::class, 'login']);
Route::post('addproduct', [apiController::class, 'addProduct']);
Route::get('listproduct', [apiController::class, 'listProduct']);
Route::delete('deleteproduct/{id}', [apiController::class, 'deleteProduct']);
Route::get('showproduct/{id}', [apiController::class, 'showProduct']);
Route::put('updateproduct/{id}', [apiController::class, 'updateProduct']);
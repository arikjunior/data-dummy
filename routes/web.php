<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PendudukController::class, 'index']);
Route::get('/create', [PendudukController::class, 'create']);
Route::POST('/store', [PendudukController::class, 'store']);
Route::get('/show/{id}', [PendudukController::class, 'show']);
Route::POST('/update/{id}', [PendudukController::class, 'update']);
Route::get('/destroy/{id}', [PendudukController::class, 'destroy']);
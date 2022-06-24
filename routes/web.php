<?php
use App\Http\Controllers\BookController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/', [BookController::class, 'index']);
Route::get('/read', [BookController::class, 'read']);
Route::get('/create', [BookController::class, 'create']);
Route::get('/store', [BookController::class, 'store']);
Route::get('/show/{id}', [BookController::class, 'show']);
Route::get('/update/{id}', [BookController::class, 'update']);
Route::get('/destroy/{id}', [BookController::class, 'destroy']);
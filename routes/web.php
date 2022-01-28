<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BillController;

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

Route::get('/clients/create', [ClientController::class,'create']);
Route::post('/clients/store', [ClientController::class,'store']);
Route::get('/clients/show/{client}', [ClientController::class,'show']);
Route::get('/clients/name/{name}', [ClientController::class,'name']);
Route::get('/clients/search/{text}', [ClientController::class,'text']);
Route::get('/clients/bills/{client}',[
    BillController::class, 
    'bills'
]);
Route::get('/clients/expensive/{value}', [BillController::class,'expensive']);

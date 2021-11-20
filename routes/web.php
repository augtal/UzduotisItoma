<?php

use App\Http\Controllers\WorkersController;
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

Auth::routes([
    'register' => false,
]);


Route::middleware(['auth', 'user'])->group(function (){
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

    Route::get('/workers', [App\Http\Controllers\WorkersController::class, 'index']);

});

Route::middleware(['auth', 'admin'])->group(function (){
    Route::get('/workers/create', [App\Http\Controllers\WorkersController::class, 'createWorker']);
    
    Route::get('/workers/update/{id}', [App\Http\Controllers\WorkersController::class, 'showUpdateWorkerPage']);
    Route::post('/workers/update/{id}/completed', [App\Http\Controllers\WorkersController::class, 'updateWorker']);

    Route::get('/workers/delete/{id}', [App\Http\Controllers\WorkersController::class, 'deleteWorker']);

});
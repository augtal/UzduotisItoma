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
    'reset' => false,
]);

Route::get('/', function (){
    return redirect()->route('home');
});

Route::get('language/{lang}', [App\Http\Controllers\LanguageController::class, 'changeLanguage'])->name('LanguageSwitch');

Route::middleware(['auth', 'user'])->group(function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/workers', [App\Http\Controllers\WorkersController::class, 'index'])->name('Workers');
    Route::get('/companies', [App\Http\Controllers\CompaniesController::class, 'index'])->name('Companies');
});

Route::middleware(['auth', 'admin'])->group(function (){
    // workers
    Route::get('/workers/create', [App\Http\Controllers\WorkersController::class, 'showCreateWorkerPage']);
    Route::post('/workers/create/completed', [App\Http\Controllers\WorkersController::class, 'createWorker']);
    
    Route::get('/workers/update/{id}', [App\Http\Controllers\WorkersController::class, 'showUpdateWorkerPage']);
    Route::post('/workers/update/{id}/completed', [App\Http\Controllers\WorkersController::class, 'updateWorker']);

    Route::get('/workers/delete/{id}', [App\Http\Controllers\WorkersController::class, 'deleteWorker']);

    // companies
    Route::get('/companies/create', [App\Http\Controllers\CompaniesController::class, 'showCreateCompanyPage']);
    Route::post('/companies/create/completed', [App\Http\Controllers\CompaniesController::class, 'createCompany']);
    
    Route::get('/companies/update/{id}', [App\Http\Controllers\CompaniesController::class, 'showUpdateCompanyPage']);
    Route::post('/companies/update/{id}/completed', [App\Http\Controllers\CompaniesController::class, 'updateCompany']);

    Route::get('/companies/delete/{id}', [App\Http\Controllers\CompaniesController::class, 'deleteCompany']);
});
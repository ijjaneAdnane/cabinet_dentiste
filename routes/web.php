<?php

use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\OrdonnanceController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\Rendez_vousController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//route crud
Route::resource("/medecin", MedecinController::class);
Route::resource("/patient", PatientController::class);
Route::resource("/rendez_vous", Rendez_vousController::class);
Route::resource("/consultation", ConsultationController::class);
Route::resource("/ordonnance", OrdonnanceController::class);
Route::resource("/facture", FactureController::class);

//chart Js

Route::get('dashboard', [ChartJsController::class, 'countByMonth']);

// Route::get('/pdf', [OrdonnanceController::class, 'showPdf'])->name('showpdfs');
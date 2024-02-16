<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('guest')->group(function () {
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::post('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware(['auth', 'verified'])->name('dashboard');
// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// });


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\ContractController;
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

Route::get('/login', [AuthController::class, 'FormLogin'])->name('login');

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::prefix('/contract')->group(function () {
    Route::get('/', [ContractController::class, 'index'])->name('contract.index');
    Route::get('/show/{id}', [ContractController::class, 'show'])->name('contract.show');

});


Route::get('/page-demo', function () {
    return view('Page.DemoPage');
});
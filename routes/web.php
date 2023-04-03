<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartemantController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaderController;

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

Route::get('/dashboard/admin/dashboard', function () {
    return view('/dashboard/admin/dashboard');
});

Route::resource('/departemants', DepartemantController::class);
Route::resource('/employees', EmployeeController::class);
// Route::get('/employees', [EmployeeController::class, 'index']);
Route::resource('/leaders', LeaderController::class);
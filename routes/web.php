<?php

//use App\Http\Controllers\cliente;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\LugareController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\EmployeeController;
//use App\Http\Controllers\BahiaController;
//use App\Http\Controllers\PDFController;
//use App\Http\Controllers\Admin\HistoryController;
//use App\Http\Controllers\Admin\ClientController;
//use App\Http\Controllers\Admin\VacancyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| Rutas del sistema
|
*/


Route::get('/', function () {
    return view('auth.login');
});

Route::resource('employee', EmployeeController::class)->names('employee');
Route::patch('employee/{id}', 'EmployeeController@update')->name('EmployeeController.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {

    return view('admin');
})->name('admin');

















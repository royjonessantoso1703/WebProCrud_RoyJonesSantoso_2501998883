<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;

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
    return view('landing');
});

Route::get('/dashboard', function (){
    return view('welcome');
});

Route::get('/anggota',[EmployeeController::class, 'index'])->name('anggota');

Route::get('/tambahanggota',[EmployeeController::class, 'tambahanggota'])->name('tambahanggota');

Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');

Route::get('/tampildata/{id}',[EmployeeController::class, 'tampildata'])->name('tampildata');

Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}',[EmployeeController::class, 'deletedata'])->name('deletedata');

Route::get('/login',[LoginController::class, 'login'])->name('login');

Route::post('/loginprocess',[LoginController::class, 'loginprocess'])->name('loginprocess');

Route::get('/register',[LoginController::class, 'register'])->name('register');

Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

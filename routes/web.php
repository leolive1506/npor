<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Guest\EnterStudentClass;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserStudentClassController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::middleware('not-in-squad')->group(function () {
        Route::get('criar-sala', [UserStudentClassController::class, 'create'])->name('user-student-class.create');
        Route::post('store', [UserStudentClassController::class, 'store'])->name('user-student-class.store');

        Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    });

    Route::middleware('in-squad')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    });

});

Route::get('/class/{code_class_id}', [EnterStudentClass::class, 'index'])->name('enter-stuent-class.index');
// Route::get('/class/form/{code_class_id}', [EnterStudentClass::class, 'form'])->name('enter-stuent-class.form');;
Route::get('/class/enter/register/{code_class_id}', [EnterStudentClass::class, 'formRegister'])->name('enter-stuent-class.formRegister');;
Route::post('/class/enter/register/{code_class_id}', [EnterStudentClass::class, 'register'])->name('enter-stuent-class.register');;

Route::get('/class/enter/login/{code_class_id}', [EnterStudentClass::class, 'formLogin'])->name('enter-stuent-class.formLogin');;
Route::post('/class/enter/login/{code_class_id}', [EnterStudentClass::class, 'login'])->name('enter-stuent-class.login');;

require __DIR__.'/auth.php';

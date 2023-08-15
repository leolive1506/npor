<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FragmentValue\FragmentValueController;
use App\Http\Controllers\GroupParticipant\FragmentValueController as GroupParticipantFragmentValueController;
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
        Route::prefix('dividir-valor')->controller(FragmentValueController::class)->group(function () {
            Route::controller(FragmentValueController::class)->group(function () {
                Route::get('/', 'index')->name('fragment-value.index');
                Route::get('/criar', 'create')->name('fragment-value.create');
                Route::post('/criar', 'store')->name('fragment-value.store');
            });

            Route::get('/criar/{fragment_value_id}/participantes', [GroupParticipantFragmentValueController::class, 'create'])
                ->name('group-participant.fragment-value.create');
            Route::post('/criar/{fragment_value_id}/participantes', [GroupParticipantFragmentValueController::class, 'store'])
                ->name('group-participant.fragment-value.store');;
        });

    });

});

Route::prefix('class')->group(base_path('routes/groups/enter-student-class.php'));

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\Guest\EnterStudentClass;
use Illuminate\Support\Facades\Route;

Route::controller(EnterStudentClass::class)->group(function () {
    Route::get('{code_class_id}', 'index')->name('enter-stuent-class.index');

    Route::prefix('enter')->middleware('guest.enter-student-class.check-user-already-logged')->group(function () {
        Route::prefix('register')->group(function () {
            Route::get('{code_class_id}', 'formRegister')->name('enter-stuent-class.formRegister');;
            Route::post('{code_class_id}', 'register')->name('enter-stuent-class.register');;
        });

        Route::prefix('login')->group(function () {
            Route::get('{code_class_id}', 'formLogin')->name('enter-stuent-class.formLogin');;
            Route::post('{code_class_id}', 'login')->name('enter-stuent-class.login');
        });
    });
});

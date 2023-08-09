<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use App\Models\UserStudentClass;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $classId = UserStudentClass::toBase()->where('user_id', auth()->id())->first()->id;
        $classForCurrentUser = StudentClass::withCount('usersStudentClass')->first($classId);
        $shareURL = env('APP_URL') . ':' . env('APP_PORT') . RouteServiceProvider::USERCLASS . '/' . $classForCurrentUser->code_class_id;

        return view('pages.dashboard.index', compact('classForCurrentUser', 'shareURL'));
    }
}

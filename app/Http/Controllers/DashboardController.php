<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use App\Models\UserStudentClass;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $classId = UserStudentClass::toBase()->where('user_id', auth()->id())->first()->id;
        $classForCurrentUser = StudentClass::withCount('usersStudentClass')->first($classId);
        $shareURL = env('APP_URL') . ':teste' ;
        return view('pages.dashboard.index', compact('classForCurrentUser', 'shareURL'));
    }
}

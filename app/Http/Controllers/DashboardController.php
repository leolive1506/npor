<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use App\Models\User;
use App\Models\UserStudentClass;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $studentClassId = UserStudentClass::toBase()->where('user_id', auth()->id())->first()->student_class_id;

        $userIds = UserStudentClass::toBase()->where('student_class_id', $studentClassId)->pluck('user_id');
        $users = User::toBase()->whereIn('id', $userIds)->orderBy('student_number', 'asc')->get();

        $studentClass = StudentClass::withCount('usersStudentClass')->first($studentClassId);
        $shareURL = env('APP_URL') . ':' . env('APP_PORT') . RouteServiceProvider::USERCLASS . '/' . $studentClass->code_class_id;

        return view('pages.dashboard.index', compact('studentClass', 'shareURL', 'users'));
    }
}

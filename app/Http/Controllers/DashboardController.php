<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use App\Models\User;
use App\Models\UserStudentClass;
use App\Providers\RouteServiceProvider;
use App\Support\Constants\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $studentClassId = UserStudentClass::toBase()->where('user_id', auth()->id())->first()->student_class_id;

        $usersStudentClass = UserStudentClass::with(['user' => fn ($query) => $query->orderBy('student_number', 'asc')])
            ->where('student_class_id', $studentClassId)
            ->get()
            ->sortBy('user.student_number');

        $studentClass = StudentClass::withCount('usersStudentClass')->first($studentClassId);
        $shareURL = env('APP_URL') . ':' . env('APP_PORT') . RouteServiceProvider::USERCLASS . '/' . $studentClass->code_class_id;

        $userPositions = Position::ALL_KEY_LABEL;
        return view('pages.dashboard.index', compact('studentClass', 'shareURL', 'usersStudentClass', 'userPositions'));
    }
}

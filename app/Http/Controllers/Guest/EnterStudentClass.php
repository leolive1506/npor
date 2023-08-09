<?php

namespace App\Http\Controllers\Guest;

use App\Actions\User\CreateUserAction;
use App\Actions\User\UserStudentClassAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Guest\EnterStudentClassRequest;
use App\Models\StudentClass;
use App\Support\Constants\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnterStudentClass extends Controller
{
    protected string $codeClassId;
    protected StudentClass $studentClass;

    public function __construct()
    {
        $this->codeClassId = request('code_class_id');
        $this->studentClass = StudentClass::where('code_class_id', $this->codeClassId)->firstOrFail();
    }

    public function index(Request $request, $codeClassId)
    {
        return view('pages.guest.enter-student-class.index', [
            'studentClass' => $this->studentClass
        ]);
    }

    public function form(Request $request, $codeClassId)
    {
        return view('pages.guest.enter-student-class.form', [
            'studentClass' => $this->studentClass
        ]);
    }

    public function enter(EnterStudentClassRequest $request, $codeClassId)
    {
        $user = CreateUserAction::execute(
            $request->student_number,
            $request->war_name,
            $request->email,
            $request->phone,
            $request->password,
        );

        UserStudentClassAction::execute($user->id, $this->studentClass->id, Position::STUDENT);

        Auth::login($user);

        return redirect()->route('dashboard.index')->with('sucess', 'Cadastrado com sucesso!');
    }
}

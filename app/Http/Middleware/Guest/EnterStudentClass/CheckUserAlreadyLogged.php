<?php

namespace App\Http\Middleware\Guest\EnterStudentClass;

use App\Actions\User\UserStudentClassAction;
use App\Models\StudentClass;
use App\Models\UserStudentClass;
use App\Support\Constants\Position;
use Closure;
use Illuminate\Http\Request;

class CheckUserAlreadyLogged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            $userId = auth()->id();
            $userStudentClass = UserStudentClass::where('user_id', $userId)->first();

            if ($userStudentClass) {
                return redirect()->route('dashboard.index');
            }

            $studentClass = StudentClass::where('code_class_id', request('code_class_id'))->firstOrFail();
            UserStudentClassAction::execute($userId, $studentClass->id, Position::STUDENT);

            return redirect()->route('dashboard.index')->with('success', 'Cadastrado com sucesso');
        }

        return $next($request);
    }
}

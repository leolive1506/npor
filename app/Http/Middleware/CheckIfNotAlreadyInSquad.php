<?php

namespace App\Http\Middleware;

use App\Models\UserStudentClass;
use Closure;
use Illuminate\Http\Request;

class CheckIfNotAlreadyInSquad
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
        $userId = auth()->user()->id;
        $userStudentClass = UserStudentClass::where('user_id', $userId)->first();

        if ($userStudentClass) {
            return redirect()->route('dashboard.index');
        }

        return $next($request);
    }
}

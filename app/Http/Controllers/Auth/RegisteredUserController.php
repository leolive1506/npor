<?php

namespace App\Http\Controllers\Auth;

use App\Actions\User\CreateUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisteredUserRequest;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisteredUserRequest $request): RedirectResponse
    {
        $user = CreateUserAction::execute(
            $request->student_number,
            $request->war_name,
            $request->email,
            $request->phone,
            $request->password,
        );

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}

<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class CreateUserAction
{
    public static function execute($studentNumber, $warName, $email, $phone, $password)
    {
        $user = User::create([
            'student_number' => $studentNumber,
            'war_name' => strtoupper($warName),
            'email' => $email,
            'phone' => $phone,
            'password' => Hash::make($password),
        ]);

        event(new Registered($user));

        return $user;
    }
}

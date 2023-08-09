<?php

namespace App\Http\Requests\Guest;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterEnterStudentClassRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'student_number' => ['required', 'integer', 'unique:' . User::class],
            'war_name' => ['required', 'string', 'max:140'],
            'phone' => ['required', 'string', 'unique:' . User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed' , Rules\Password::defaults()],
        ];
    }
}

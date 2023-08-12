<?php

namespace App\Http\Requests\FragmentValue;

use Illuminate\Foundation\Http\FormRequest;

class CreateFragmentValueRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:80'],
            'description' => ['nullable'],
        ];
    }
}

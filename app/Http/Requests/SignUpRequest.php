<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email'=> 'required|email' ,
            'password'=> ['required' ,  password::min(8)->mixedCase()->numbers()->symbols()],
            'phone' => 'required|string|max:20',
            'DOB' => 'nullable|date',
            'gender' => 'nullable|string|in:Male,Female',
        ];
    }
}

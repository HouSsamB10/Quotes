<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RegisterUserRequest extends FormRequest
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
            'user_name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'birth_date'=> 'required|date:Y-m-d',
            'nationaility'=> 'required|string',
            'status'=> ['required', Rule::in(['premium'])],
            'gender'  => ['required', Rule::in(['male','female'])],
            'type' => ['required', Rule::in(['client'])],
        ];
    }
}

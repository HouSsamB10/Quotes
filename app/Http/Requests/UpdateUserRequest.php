<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateUserRequest extends FormRequest
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
            'email'=> 'sometimes|email|unique:users,email',
            'birth_date'=> 'sometimes|date:Y-m-d',
            'nationaility'=> 'sometimes|string',
            'status'=> ['sometimes', Rule::in(['free','premium'])],
            'user_name'=>  'sometimes|string' ,
            'gender'  => ['sometimes', Rule::in(['male','female'])],
            'type' => ['sometimes', Rule::in(['admin','client'])],
            'category_id'=>  'sometimes|numeric|exists:categories,id',
            'theme_id'=>  'sometimes|numeric|exists:themes,id',
        ];
    }
}

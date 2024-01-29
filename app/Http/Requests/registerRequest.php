<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'userName' => 'required|min:5',
            'userEmail' => 'required|',
            'userPassword' => 'required|',
            'userPasswordConfirm' => 'required',
            'agreeStatement' => 'required|accepted',
        ];

    }

    public function messages()
    {
        return [
            'userName' => 'Input your name',
        ];
    }
}
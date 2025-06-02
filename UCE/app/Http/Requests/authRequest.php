<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class authRequest extends FormRequest
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
            'sobrenome' => 'required|string|max:255',
            'birth' => 'required|date',
            'cpf' => 'required|string|max:14|unique:users,cpf',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ];
    }
}

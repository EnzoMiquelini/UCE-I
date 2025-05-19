<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRegistrationRequest extends FormRequest
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
            'email' => 'required|string|email|max:255|unique:users',
            'cpf' => 'required|string|max:14|unique:users',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'sobrenome.required' => 'O campo sobrenome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'cpf.required' => 'O campo cpf é obrigatório.',
            'phone.required' => 'O campo telefone é obrigatório.',
            'password.required' => 'O campo senha é obrigatório.',
            'password_confirmation.required' => 'O campo confirmação de senha é obrigatório.'
        ];
    }
}

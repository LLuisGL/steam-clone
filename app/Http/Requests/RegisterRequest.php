<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required|string|max:30|unique:users',
            'username'=>'required|string|max:30|unique:users',
            'password' => 'required|string|min:8',
            'Mayor'=> 'accepted',
        ];
    }

    public function messages()
    {
        return [
            'Mayor.accepted' => 'Debes confirmar que eres mayor de edad para continuar.',
        ];
    }

    public function getCredential()
    {
        return $this->only(['email', 'name', 'username', 'password']);
    }
}

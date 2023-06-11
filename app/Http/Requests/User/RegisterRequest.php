<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'          =>  'required|max:255',
            'profile_photo' =>  [
                                    'nullable',
                                    'image',
                                    'max:2048', // in kb
                                ],
            'email'         =>  'required|email|unique:users',
            'phone'         =>  'required|max:255',
            'age'           =>  'integer|min:16',
            'degree'        =>  'string',
            'job_title '    =>  'string',
            'device_name'   =>  'string',
            'bio'           =>  'string',
            'password'      =>  'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ];
    }
}

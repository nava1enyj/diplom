<?php

namespace App\Http\Requests;
use App\Models\User;
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
            'email' => 'required|email|unique:App\Models\User,email',
            'login' => 'required|min:3|max:50|alpha_dash|unique:App\Models\User,login',
            'avatar' => 'image',
            'password' => 'required|confirmed|min:8|max:255'
        ];
    }
}

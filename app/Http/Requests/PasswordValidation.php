<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordValidation extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'oldPassword' => 'required|min:6',
            'newPassword' => 'required|same:confirmPassword|min:6',
            'confirmPassword' => 'required|same:newPassword|min:6'
        ];
    }

    public function messages()
    {
        return[
            'oldPassword.required' => 'You need to fill old password***',
            'newPassword.required' => 'You need to fill new password***',
            'confirmPassword.required' => 'You need to fill confirm password***'
        ];
    }
}

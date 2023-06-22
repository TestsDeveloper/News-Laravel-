<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileStoreRequest extends FormRequest
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
            'name' => 'required|min:5',
            'email' => 'email',
            'phone' => 'required',
            'address' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'You need to fill the name***',
            'email.required' => 'You need to fill the email***',
            'phone.required' => 'You need to fill the phone***',
            'address.required' => 'You need to fill the address***'
        ];
    }
}

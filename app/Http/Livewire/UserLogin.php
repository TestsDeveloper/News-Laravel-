<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserLogin extends Component
{
    public $email,$password;

    protected function rules()
    {
        return [
            'email' => ['required','email'],
            'password' => 'required|min:6'
        ];
    }


    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function loginUser()
    {
        $validatedData =$this->validate();
    }


    public function render()
    {
        return view('livewire.user-login');
    }
}

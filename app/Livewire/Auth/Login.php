<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.auth')]
#[Title('LibraSync | Login')]
class Login extends Component
{


    public $email = '';
    public $password = '';

    public function login(){
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], true)) {
            return redirect('/');
        } else {
            $notification = array(
                'message' => 'Invalid Credentials!',
                'alert-type' => 'error'
            );
            return redirect('/login')->with($notification);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}

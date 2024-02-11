<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.auth')]
#[Title('LibraSync | Register')]
class Register extends Component
{
    public $name, $email, $password;

    public function register(){
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3'
        ]);

        $hashPassword = Hash::make($this->password);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $hashPassword,
        ]);

        $notification = array(
            'message' => 'Registration successful!',
            'alert-type' => 'success'
        );

        return redirect()->to('/login')->with($notification);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}

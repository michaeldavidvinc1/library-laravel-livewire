<?php

namespace App\Livewire\Auth;

use App\Mail\ForgotPassword as MailForgotPassword;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

#[Layout('layouts.auth')]
#[Title('LibraSync | ForgotPassword')]
class ForgotPassword extends Component
{
    public $email;

    public function save(){
        $checkEmail = User::where('email', $this->email)->first();
        if (empty($checkEmail)) {
            $notification = array(
                'message' => 'Email not found in system!',
                'alert-type' => 'error'
            );
            return redirect()->to('/forgot-password')->with($notification);
        }

        $checkEmail->remember_token = Str::random(30);
        $checkEmail->save();
        Mail::to($checkEmail->email)->send(new MailForgotPassword($checkEmail));
        $notification = array(
            'message' => 'Please check your email and reset your password',
            'alert-type' => 'success'
        );
        return redirect()->to('/forgot-password')->with($notification);
    }


    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}

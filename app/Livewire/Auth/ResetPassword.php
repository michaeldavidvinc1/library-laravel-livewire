<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.auth')]
#[Title('LibraSync | Reset Password')]
class ResetPassword extends Component
{

    public $password, $cpassword, $token;

    public function save(){
        if($this->cpassword != $this->password) {
            $notification = array(
                'message' => 'Password does not match to confirm password',
                'alert-type' => 'error'
            );
            return redirect()->to('/token/'.$this->token)->with($notification);
        } 

        $user = User::where('remember_token', '=', $this->token)->first();
        $user->password = Hash::make($this->password);
        $user->save();

        $notification = array(
            'message' => 'Password have been reset',
            'alert-type' => 'success'
        );
        return redirect()->to('/login')->with($notification);
    }

    public function mount($token){
        $this->token = $token;
        $user = User::where('remember_token', '=', $token)->first();
        if(empty($user)){
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}

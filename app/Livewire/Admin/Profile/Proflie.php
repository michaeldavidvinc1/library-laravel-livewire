<?php

namespace App\Livewire\Admin\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Proflie extends Component
{

    public $name, $email, $phone, $address, $current_password, $new_password, $confirm_password;

    public function mount(){
        $user = User::find(Auth::user()->id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->address = $user->address;
    }

    public function updateProfile(){
        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->address = $this->address;
        $user->save();

        $notification = array(
            'message' => 'Profile update successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/profile')->with($notification);
    }

    public function updatePassword(){
        $this->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = User::find(Auth::user()->id);

        if (Hash::check($this->current_password, $user->password)) {
            $user->update(['password' => Hash::make($this->new_password)]);
            
            $notification = array(
                'message' => 'Password change successfully!',
                'alert-type' => 'success'
            );
            return redirect('/admin/profile')->with($notification);
        } else {
            $notification = array(
                'message' => 'Current password incorrect!',
                'alert-type' => 'error'
            );
            return redirect('/admin/profile')->with($notification);
        }
    }

    public function render()
    {
        return view('livewire.admin.profile.proflie');
    }
}

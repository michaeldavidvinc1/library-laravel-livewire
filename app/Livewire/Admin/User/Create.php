<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $name, $email, $phone, $address, $role, $status;


    public function save(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'phone' => 'nullable',
            'address' => 'nullable',
            'status' => 'required',
            'role' => 'required',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make(12345),
            'phone' => $this->phone,
            'address' => $this->address,
            'status' => $this->status,
            'role' => $this->role,
        ]);

        $notification = array(
            'message' => 'Users created successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/users')->with($notification);
    }

    public function render()
    {
        return view('livewire.admin.user.create');
    }
}

<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $name, $email, $phone, $address, $status, $role, $id;

    public function mount($id){

        $user = User::find($id);
        
        $this->id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->address = $user->address;
        $this->status = $user->status;
        $this->role = $user->role;
    }

    public function edit(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'status' => 'required',
            'role' => 'required',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        $users = User::find($this->id);

        $users->update([
            'name' => $this->name,
            'email' => $this->email,
            'status' => $this->status,
            'role' => $this->role,
            'phone' => $this->phone,
            'address' => $this->address,
            'updated_by' => auth()->user()->id,
        ]);

        $notification = array(
            'message' => 'Users updated successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/users')->with($notification);
    }

    public function render()
    {
        return view('livewire.admin.user.edit');
    }
}

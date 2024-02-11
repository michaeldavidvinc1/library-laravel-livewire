<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $id, $search;

    protected $listeners = ['delete' => 'deleteBook'];

    public function delete($id)
    {
        $this->id = $id;
        $this->dispatch('show-delete-confirmation');
    }

    public function deleteBook()
    {
        $book = User::find($this->id);
        $book->delete();
        $notification = array(
            'message' => 'Users deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/users')->with($notification);
    }

    public function render()
    {
        return view('livewire.admin.user.index', [
            'users' => User::where('name', 'LIKE', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}

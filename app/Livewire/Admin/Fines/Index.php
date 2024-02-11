<?php

namespace App\Livewire\Admin\Fines;

use App\Models\Fines;
use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{

    public $startDate;
    public $endDate;
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';

    public function paid($id){
        $now = Carbon::now();
        $fine = Fines::find($id);
        // Check deadline
        if($fine->deadline < $now) {
            $user = User::find(Auth::user()->id);
            $user->status = "NONACTIVE";
            $user->save();
        }

        $fine->status = "PAID";
        $fine->save();

        $notification = array(
            'message' => 'Paid fines successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/fines')->with($notification);
    }

    public function render()
    {
        $query = Fines::query();

        if ($this->startDate && $this->endDate) {
            $query->whereBetween('deadline', [$this->startDate, $this->endDate]);
        }

        return view('livewire.admin.fines.index', [
            'fines' => $query->paginate(5)
        ]);
    }
}

<?php

namespace App\Livewire\Client;

use App\Models\Loan;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

#[Layout('layouts.client')]
class History extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';

    public $startLoan, $endLoan, $startTs, $endTs;

    public function render()
    {
        
        $query = Loan::query();

        if ($this->startLoan && $this->endLoan) {
            $query->whereBetween('created_at', [$this->startLoan, $this->endLoan]);
        }

        $query->where('created_by', Auth::user()->id);

        $queryTs = Transaction::query();

        if ($this->startTs && $this->endTs) {
            $queryTs->whereBetween('created_at', [$this->startTs, $this->endTs]);
        }
        
        $queryTs->where('user_id', Auth::user()->id);

        return view('livewire.client.history', [
            'loans' => $query->paginate(5),
            'transactions' => $queryTs->paginate(5)
        ]);
    }
}

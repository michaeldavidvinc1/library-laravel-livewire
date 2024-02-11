<?php

namespace App\Livewire\Admin;

use App\Models\BookItem;
use App\Models\Loan;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{
    public $date = 'today';

    public function render()
    {
        $now = Carbon::now();
        $queryRegistrations = User::query();
        $queryBorrow = Transaction::query();
        $queryReturn = Loan::query();
        $queryLateReturn = Loan::query();

        switch ($this->date) {
            case 'today':
                $queryRegistrations->whereDate('created_at', Carbon::today());
                $queryBorrow->whereDate('created_at', Carbon::today());
                $queryReturn->whereDate('created_at', Carbon::today())->where('status', 'RETURNED');
                $queryLateReturn->whereDate('date_return', Carbon::today())->where('status', 'NOTRETURNED')->where('date_return', '<', $now);
                break;
            case 'month':
                $startOfMonth = Carbon::now()->startOfMonth();
                $endOfMonth = Carbon::now()->endOfMonth();

                $queryRegistrations->whereBetween('created_at', [$startOfMonth, $endOfMonth]);
                $queryBorrow->whereBetween('created_at', [$startOfMonth, $endOfMonth]);
                $queryReturn->whereBetween('created_at', [$startOfMonth, $endOfMonth])->where('status', 'RETURNED');
                $queryLateReturn->whereBetween('date_return', [$startOfMonth, $endOfMonth])->where('status', 'NOTRETURNED')->where('date_return', '<', $now);
                break;
            case 'year':
                $startOfYear = Carbon::now()->startOfYear();
                $endOfYear = Carbon::now()->endOfYear();

                $queryRegistrations->whereBetween('created_at', [$startOfYear, $endOfYear]);
                $queryBorrow->whereBetween('created_at', [$startOfYear, $endOfYear]);
                $queryReturn->whereBetween('created_at', [$startOfYear, $endOfYear])->where('status', 'RETURNED');
                $queryLateReturn->whereBetween('date_return', [$startOfYear, $endOfYear])->where('status', 'NOTRETURNED')->where('date_return', '<', $now);
            default:
                break;
        }

        $Registrations = $queryRegistrations->count();
        $Borrows = $queryBorrow->count();
        $Returned = $queryReturn->count();
        $LateReturn = $queryLateReturn->get();

        $totalBooks = BookItem::where('status', '!=', 'BROKEN')->count();
        $totalUser = User::where('status', 'ACTIVE')->count();


        return view('livewire.admin.dashboard', [
            'todayRegistrations' => $Registrations,
            'borrows' => $Borrows,
            'returned' => $Returned,
            'totalBooks' => $totalBooks,
            'totalUser' => $totalUser,
            'lateReturn' => $LateReturn,
        ]);
    }
}

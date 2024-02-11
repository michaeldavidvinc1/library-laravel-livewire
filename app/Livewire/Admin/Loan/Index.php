<?php

namespace App\Livewire\Admin\Loan;

use App\Models\BookItem;
use App\Models\Fines;
use App\Models\Loan;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DateInterval;
use DateTime;

class Index extends Component
{
    public $startDate;
    public $endDate;
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';

    public function returned($id) {
        // if returned tepat waktu
        $now = Carbon::now();
        $loan = Loan::find($id);
        $book_id = $loan->transaction->book_item_id;
        $book_item = BookItem::find($book_id);
        $date = (new DateTime())->add(new DateInterval('P2D'));

        if($loan->date_return < $now){
            Fines::create([
                'loan_id' => $loan->id,
                'amount' => 25000,
                'deadline' => $date,
                'created_by' => auth()->user()->id
            ]);
        }


        $loan->status = "RETURNED";
        $loan->save();

        $book_item->status = "AVAILABLE";
        $book_item->save();

        $notification = array(
            'message' => 'Book returned successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/loan')->with($notification);


    }

    public function render()
    {
        $query = Loan::query();

        if ($this->startDate && $this->endDate) {
            $query->whereBetween('created_at', [$this->startDate, $this->endDate]);
        }

        return view('livewire.admin.loan.index', [
            'loans' => $query->paginate(5)
        ]);
    }
}

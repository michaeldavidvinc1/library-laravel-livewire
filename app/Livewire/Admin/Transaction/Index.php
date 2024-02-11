<?php

namespace App\Livewire\Admin\Transaction;

use App\Models\BookItem;
use App\Models\Loan;
use App\Models\Transaction;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{

    public $startDate;
    public $endDate;
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';

    public function approve($id)
    {
        $date = (new DateTime())->add(new DateInterval('P7D'));

        $transaction = Transaction::find($id);
        $book = BookItem::find($transaction->book_item_id);

        Loan::create([
            'transaction_id' => $id,
            'user_id' => $transaction->user_id,
            'date_return' => $date,
            'created_by' => Auth::user()->id
        ]);

        $transaction->status = 'APPROVE';
        $transaction->save();

        $book->status = 'NONAVAILABLE';
        $book->save();


        $notification = array(
            'message' => 'Approved borrow book successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/transaction')->with($notification);
    }

    public function decline($id)
    {
        $transaction = Transaction::find($id);

        $transaction->status = 'DECLINE';
        $transaction->save();

        $notification = array(
            'message' => 'Decline borrow book successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/transaction')->with($notification);
    }


    public function render()
    {
        $query = Transaction::query();

        if ($this->startDate && $this->endDate) {
            $query->whereBetween('created_at', [$this->startDate, $this->endDate]);
        }

        return view('livewire.admin.transaction.index', [
            'transactions' => $query->paginate(5)
        ]);
    }
}

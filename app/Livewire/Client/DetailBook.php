<?php

namespace App\Livewire\Client;

use App\Models\Book;
use App\Models\BookItem;
use App\Models\Loan;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.client')]
class DetailBook extends Component
{
    public $books = [];
    public $category_id;
    public $book_id;
    public $buttonLoan = false;

    protected $listeners = ['loan' => 'loanBook'];

    public function mount($id){
        $this->books = Book::find($id);
        $this->category_id = $this->books->category_id;

        $book_item = BookItem::where('book_id', $id)->where('status', 'AVAILABLE')->first();
        $nonavailable = BookItem::where('book_id', $id)->where('status', 'NONAVAILABLE')->first();
        $userTransaction = null;
        if($nonavailable){
            $userTransaction = Transaction::where('user_id', Auth::user()->id)->where('book_item_id', $nonavailable->id);
        }
        if($book_item && !$userTransaction){
            $this->buttonLoan = true;
        } else {
            $this->buttonLoan = false;
        }
    }

    public function loan($id)
    {
        $this->book_id = $id;
        $this->dispatch('show-delete-confirmation');
    }

    public function loanBook()
    {
        $book_item = BookItem::where('book_id', $this->book_id)->where('status', 'AVAILABLE')->first();
        // Cek Auth
        if(!Auth::check()){
            return redirect()->to('/login');
        }
        $user = Auth::user()->id;

        // Cek udh berapa kali ngajukan peminjaman
        $checkTotalLoan = Transaction::where('user_id', $user)->where('status', 'WAITING')->get();
        if($checkTotalLoan->count() >= 2) {
            $notification = array(
                'message' => "You've borrowed twice, status is still pending.",
                'alert-type' => "warning"
            );
            return redirect()->to('/book/'.$this->book_id)->with($notification);
        }

        // Cek user masih dalam peminjaman buku atau tidak
        $checkUserLoanBook = Loan::where('created_by', $user)->where('status', 'NOTRETURNED')->get();
        if($checkUserLoanBook->count() >= 2) {
            $notification = array(
                'message' => 'You have to !',
                'alert-type' => "You've borrowed twice, book not returned."
            );
            return redirect()->to('/book/'.$this->book_id)->with($notification);
        }

        // Loan
        Transaction::create([
            'book_item_id' => $book_item->id,
            'user_id' => $user,
            'created_by' => $user,
        ]);

        $book_item->status = "NONAVAILABLE";
        $book_item->save();

        $notification = array(
            'message' => 'Book successfully borrowed.',
            'alert-type' => 'success'
        );
        return redirect()->to('/book/'.$this->book_id)->with($notification);
    }

    public function render()
    {
        $related = Book::where('category_id', $this->category_id)->get();
        return view('livewire.client.detail-book', [
            'related' => $related
        ]);
    }
}

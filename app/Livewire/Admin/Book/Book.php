<?php

namespace App\Livewire\Admin\Book;

use App\Models\Book as ModelsBook;
use App\Models\BookItem;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Book extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $id;
    public $bookId;
    public $bookItem=[];
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    protected $listeners = ['delete' => 'deleteBook'];

    public function delete($id)
    {
        $this->id = $id;
        $this->dispatch('show-delete-confirmation');
    }

    public function deleteBook()
    {
        $book = ModelsBook::find($this->id);
        BookItem::where('book_id', $book->id)->delete();
        Storage::delete($book->image);
        $book->delete();
        $notification = array(
            'message' => 'Book deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/book')->with($notification);
    }

    public function loadBookData($bookId)
    {

        $this->bookItem = BookItem::where('book_id', $bookId)->get();
    }

    public function deleteBookItem($bookItemId) {
        $bookItem = BookItem::find($bookItemId);
        $book = ModelsBook::find($bookItem->book_id);

        $bookItem->delete();

        $book->quantity = $book->quantity - 1;
        $book->save();

        $notification = array(
            'message' => 'Book item deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/book')->with($notification);

    }

    public function render()
    {
        return view('livewire.admin.book.book', [
            'books' => ModelsBook::where('title', 'LIKE', '%' . $this->search . '%')->paginate(5)
        ]);
    }
}

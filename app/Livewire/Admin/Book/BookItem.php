<?php

namespace App\Livewire\Admin\Book;

use App\Models\BookItem as ModelsBookItem;
use Livewire\Component;

class BookItem extends Component
{
    public $bookItems =[];
    public $bookId;

    protected $listeners = ['displayBookItems'];

    public function displayBookItems($bookId)
    {
        $this->bookId = $bookId;
        $this->bookItems = ModelsBookItem::where('book_id', $bookId)->get();
    }

    public function render()
    {
        return view('livewire.admin.book.book-item', [
            'bookItem' => ModelsBookItem::where('book_id', $this->id)->get()
        ]);
    }
}

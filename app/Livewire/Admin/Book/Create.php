<?php

namespace App\Livewire\Admin\Book;

use App\Models\Book;
use App\Models\BookItem;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title = '';
    public $author = '';
    public $publisher = '';
    public $category_id = '';
    public $quantity = '';
    public $description = '';
    public $image;


    public function save(){
        $this->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pathPhoto = $this->image->store('public/photo');

        $bookData = Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'publisher' => $this->publisher,
            'category_id' => $this->category_id,
            'quantity' => $this->quantity,
            'description' => $this->description,
            'image' => $pathPhoto,
            'created_by' => auth()->user()->id,
        ]);

        $quantity = $this->quantity;

        // Check if book details already created
        if ($bookData->book_item()->count() == 0) {
            for ($i = 0; $i < $quantity; $i++) {
                BookItem::create([
                    'book_id' => $bookData->id,
                    'user_id' => null,
                ]);
            }
        }

        $notification = array(
            'message' => 'Book created successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/book')->with($notification);
    }

    public function render()
    {
        return view('livewire.admin.book.create', [
            'categories' => Category::all()
        ]);
    }
}

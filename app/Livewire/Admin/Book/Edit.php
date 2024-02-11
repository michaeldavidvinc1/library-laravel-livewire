<?php

namespace App\Livewire\Admin\Book;

use App\Models\Book;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{

    use WithFileUploads;

    public $id;
    public $title = '';
    public $author = '';
    public $publisher = '';
    public $category_id = '';
    public $quantity = '';
    public $description = '';
    public $image;

    public function mount($id){

        $book = Book::find($id);
        
        $this->id = $book->id;
        $this->title = $book->title;
        $this->author = $book->author;
        $this->publisher = $book->publisher;
        $this->category_id = $book->category_id;
        $this->quantity = $book->quantity;
        $this->description = $book->description;
    }

    public function update(){
        $this->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'image' => 'max:2048',
        ]);

        if(!$this->id){
            $notification = array(
                'message' => 'Book data has not found',
                'alert-type' => 'error'
            );
            return redirect('/admin/book')->with($notification);
        }

        $book = Book::find($this->id);

        $pathPhoto = $book->image;
        if ($this->image) {
            Storage::delete($book->image);
            $pathPhoto = $this->image->store('public/photo');
        }

        $book->update([
            'title' => $this->title,
            'author' => $this->author,
            'publisher' => $this->publisher,
            'category_id' => $this->category_id,
            'quantity' => $this->quantity,
            'description' => $this->description,
            'image' => $pathPhoto,
            'updated_by' => auth()->user()->id,
        ]);

        $notification = array(
            'message' => 'Book updated successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/book')->with($notification);
    }


    public function render()
    {
        return view('livewire.admin.book.edit', [
            'categories' => Category::all()
        ]);
    }
}

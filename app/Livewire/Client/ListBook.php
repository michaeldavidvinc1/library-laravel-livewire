<?php

namespace App\Livewire\Client;

use App\Models\Book;
use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

#[Layout('layouts.client')]
class ListBook extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $category_id;

    public function updateCategory($categoryId = null)
{
    $this->category_id = $categoryId;
}

    public function render()
    {

        $query = Book::query();

    // Tambahkan kondisi WHERE berdasarkan pencarian judul jika $this->search tidak kosong
    if ($this->search) {
        $query->where('title', 'LIKE', '%' . $this->search . '%');
    }

    // Tambahkan kondisi WHERE berdasarkan kategori jika $this->selectedCategory tidak kosong
    if ($this->category_id) {
        $query->where('category_id', $this->category_id);
    }

    // Ambil data buku dengan kondisi-kondisi yang telah ditetapkan
    $books = $query->paginate(12);

        return view('livewire.client.list-book', [
            'books' => $books,
            'categories' => Category::all()
        ]);
    }
}

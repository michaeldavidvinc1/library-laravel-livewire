<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['delete' => 'deleteCategory'];


    public $search;
    public $name;
    public $id;

    public function store(){
        $this->validate([
            'name' => 'required|unique:categories'
        ]);

        Category::create([
            'name' => $this->name
        ]);

        $notification = array(
            'message' => 'Category created successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/category')->with($notification);
    }

    public function edit($id){
        $category = Category::find($id);
        $this->name = $category->name;
        $this->id = $category->id;
    }

    public function update(){
        $this->validate([
            'name' => 'required|unique:categories,name,' . $this->id,
        ]);

        Category::find($this->id)->update([
            'name' => $this->name
        ]);

        $notification = array(
            'message' => 'Category update successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/category')->with($notification);
    }


    public function delete($id)
    {
        $this->id = $id;
        $this->dispatch('show-delete-confirmation');
    }

    public function deleteCategory()
    {
        $category = Category::find($this->id);
        $category->delete();
        $notification = array(
            'message' => 'Category deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/category')->with($notification);
    }

    public function render()
    {
        return view('livewire.admin.category.index', [
            'categories' => Category::where('name', 'LIKE', '%' . $this->search . '%')->paginate(5)
        ]);
    }
}

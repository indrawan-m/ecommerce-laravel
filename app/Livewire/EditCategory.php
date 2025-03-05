<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class EditCategory extends Component
{
    public $category;
    public $category_name;

    public function mount($id){
        $this->category = Category::find($id);

        $this->category_name = $this->category->name;
    }

    public function update(){
        // dd('Update method is called');
        // debug data yang dikirim 
        // dd($this->category_name);

        // validate 
        $this->validate([
            'category_name' => 'required|string|max:225',
        ]);

        $this->category->update([
            'name' => $this->category_name,
        ]);

        return $this->redirect('/manage/categories', navigate: true);

    }


    public function render()
    {
        return view('livewire.edit-category')->layout('admin-layout');
    }
}

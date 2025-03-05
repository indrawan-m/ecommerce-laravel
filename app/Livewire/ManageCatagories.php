<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class ManageCatagories extends Component
{
    public $currentUrl;

    public $categories;

    public function render()
    {

        $current_url = url()->current();
        $explode_url = explode('/',$current_url);
        $this->currentUrl = $explode_url[4];
        return view('livewire.manage-catagories')->layout('admin-layout');
    }

    public function mount()
    {
        $this->categories = Category::all();
    }
}

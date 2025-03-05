<?php

namespace App\Livewire;

use Livewire\Component;

class ManageOrders extends Component
{
    public $currentUrl;
    
    public function render()
    {

        // dd(url()->current());
        $current_url = url()->current();
        $explode_url = explode('/',$current_url);
        
        // dd($explode_url);
        $this->currentUrl = $explode_url[3];


        return view('livewire.manage-orders')
        ->layout('admin-layout');
    }
}

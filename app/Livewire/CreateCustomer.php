<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class CreateCustomer extends Component
{
    public $nama = '';
    public $email = '';
    public $phone = '';
    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required|unique:users|max:255',
        ]);

        User::create($validated);
        $this->reset();
    }
}

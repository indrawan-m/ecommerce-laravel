<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditProduct extends Component
{
    use WithFileUploads;
   
    public $product_name = '';
    public $photo;
    public $product_price = '';
    public $product_description = '';
    public $category_id;
    public $all_categories;
    public $product_details;

    public function mount($id){
       
        $this->product_details = Product::find($id);

        $this->product_name = $this->product_details->name;
        $this->product_price = $this->product_details->price;
        $this->product_description = $this->product_details->description;
        $this->category_id = $this->product_details->category_id;
        $this->photo = $this->product_details->image;
        // dd($this->product_details);
        $this->all_categories = Category::all();
    }

    public function update(){
        // dd('Update method is called');
        // debug data yang dikirim 
        // dd($this->product_name, $this->product_price, $this->product_description, $this->category_id, $this->photo);
        
        // validate 
        $this->validate([
            'product_name' => 'required|string|max:225',
            'product_price' => 'required|numeric',
            'product_description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ]);
       

         //check if the image update/uploaded
         if ($this->photo && !is_string($this->photo)) {
            $photoPath = $this->photo->store('photos', 'public');
        } else {
            $photoPath = $this->photo; 
        }

        // Update data produk
        $this->product_details->update([
            'name' => $this->product_name,
            'description' => $this->product_description,
            'price' => $this->product_price,
            'category_id' => $this->category_id,
            'image' => $photoPath,
        ]);

        // Debug setelah update untuk memastikan produk sudah diupdate
    // dd('Produk berhasil diupdate!', $this->product_details->fresh());

        return $this->redirect('/products', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-product')->layout('admin-layout');
    }
}



<?php

namespace App\Livewire\Auth\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AuthupdateProduct extends Component
{
    use WithFileUploads;
    public $productCategory;
    public $productId;
    public $productName;
    public $price;
    public $imageProduct;

    public function mount($id)
    {
        $product = Product::find($id);

        if ($product) {
            $this->productId = $product->id;
            $this->productCategory = $product->category_name;
            $this->productName = $product->product_name;
            $this->price = $product->price;
            $this->imageProduct = $product->image_product;
        } else {
            session()->flash('error', 'Product not found.');
        }
    }

    public function updateProduct()
    {
        $product = Product::find($this->productId);

        if ($product) {
            // Handle the image upload
            if ($this->imageProduct && is_object($this->imageProduct)) {
                // Delete the old image if it exists
                if ($product->image_product && Storage::exists($product->image_product)) {
                    Storage::delete($product->image_product);
                }

                // Store the new image and get the path
                $imagePath = $this->imageProduct->store('product-images', 'public');
            } else {
                // Retain the old image if no new image is uploaded
                $imagePath = $product->image_product;
            }

            $product->update([
                'category_name' => $this->productCategory,
                'product_name' => $this->productName,
                'price' => $this->price,
                'image_product' => $imagePath,
            ]);

            session()->flash('message', 'Product updated successfully.');
            return redirect()->route('list');
        } else {
            session()->flash('error', 'Product not found.');
        }
    }

    public function render()
    {
        return view('livewire.auth.admin.authupdate-product');
    }
}


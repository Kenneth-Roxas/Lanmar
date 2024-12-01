<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function render() {
        return view('livewire.auth.admin.auth-product-list');
    }
}

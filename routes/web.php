<?php

use App\Livewire\Auth\Authabout;
use App\Livewire\Auth\AuthCart;
use App\Livewire\Auth\AuthCategory;
use App\Livewire\Auth\AuthCheckOut;
use App\Livewire\Auth\Authcontact;
use App\Livewire\Auth\AuthHome;
use App\Livewire\Auth\Authlogin;
use App\Livewire\Auth\AuthProdOverView;
use App\Livewire\Auth\Authproduct;
use App\Livewire\Auth\AuthProfile;
use App\Livewire\Auth\AuthWelcome;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// First Page
Route::get('/', AuthWelcome::class);

// Home Page
Route::get('/LanMar/HomePage', AuthHome::class)->name('home');

// Login Page
Route::get('/Lanmar/Login', Authlogin::class)->name('login');

// Product Page
Route::get('/Lanmar/Product', Authproduct::class)->name('product');

// About Page
Route::get('/Lanmar/AboutUs', Authabout::class)->name('about');

// Contact Page
Route::get('/Lanmar/Contact', Authcontact::class)->name('contact');


// Not done
Route::get('/Cart', AuthCart::class);
Route::get('/checkout', AuthCheckOut::class)->name('checkout');
Route::get('/productname', AuthProdOverView::class)->name('overview');
Route::get('/profile', AuthProfile::class)->name('profile');
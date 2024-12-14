<?php

use App\Livewire\Auth\AuthCheckOut;
use Illuminate\Http\Request;
use App\Http\Middleware\UserActivity;
use App\Livewire\Auth\Admin\AuthProductList;
use App\Livewire\Auth\Authabout;
use App\Livewire\Auth\AuthAddProduct;
use App\Livewire\Auth\AuthAdmin;
use App\Livewire\Auth\AuthAdminUser;
use App\Livewire\Auth\AuthBooking;
use App\Livewire\Auth\AuthCart;
use App\Livewire\Auth\Authcontact;
use App\Livewire\Auth\AuthHome;
use App\Livewire\Auth\Authlogin;
use App\Livewire\Auth\AuthProfile;
use App\Livewire\Auth\AuthSignUp;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Order;
use App\Http\Controllers\OrderController;
use App\Livewire\Auth\AuthOrders;
use App\Http\Controllers\CartController;

// Admin
Route::get('/KennethRoxas', AuthAdmin::class)->name('dashboard');
Route::get('/users', AuthAdminUser::class)->middleware(UserActivity::class)->name('user');
Route::get('/AdminProduct', AuthAddProduct::class)->name('adding');
Route::get('/list', AuthProductList::class)->name('list');
// Route::get('/orders', \App\Livewire\Auth\Admin\AuthOrders::class)->name('placedOrder');
Route::get('/orders', \App\Livewire\Auth\Admin\AuthOrders::class)->middleware('auth')->name('placedOrder');

Route::get('/greeting', [OrderController::class, 'showGreeting'])->name('greeting');
Route::get('/send-order-confirmation', [OrderController::class, 'sendOrderConfirmation'])->name('send.order.confirmation');

Route::get('send-email', [Order::class, 'sendEmail'])->name('PlaceOrder');

// Home Page
Route::get('/', AuthHome::class)->name('home');

// Login Page
Route::get('/register', AuthSignUp::class)->name('register');
Route::get('/login', AuthLogin::class)->name('login');

// Product Page

Route::get('/cart', AuthCart::class)->name('cart');
// About Page
Route::get('/aboutUs', Authabout::class)->name('about');

// Contact Page
Route::get('/contact', Authcontact::class)->name('contact');


// Not done
Route::get('/Booking', AuthBooking::class)->name('booking');

Route::get('/profile', AuthProfile::class)->name('profile');

Route::post('/CartPage', [\App\Http\Controllers\CartController::class, 'store'])->name('addToCart');


Route::post('/checkout/all', function () {
    session()->put('checkout_cart', session('cart')); // Store cart in session for checkout
    return redirect()->route('checkout', ['id' => 'all']);
})->name('checkout.all');
Route::get('/checkout/{id}', AuthCheckOut::class)->name('checkout');
// Route::get('/checkout/{id}', \App\Livewire\Auth\AuthCheckOut::class)->name('checkout');
Route::get('/product', \App\Livewire\Auth\Authproduct::class)->name('product');

<?php

use App\Livewire\Auth\Admin\AuthupdateProduct;
use App\Livewire\Auth\AuthBookingOverview;
use App\Livewire\Auth\AuthForgotPass;
use App\Livewire\Auth\AuthOverview;
use Illuminate\Support\Facades\Route;

// Admin
use App\Livewire\Auth\Admin\AuthProductList;
use App\Livewire\Auth\Admin\AuthBookinglist;
use App\Livewire\Auth\AuthAdmin;
use App\Livewire\Auth\AuthAdminUser;

// User
use App\Livewire\Auth\AuthCheckOut;
use App\Http\Middleware\UserActivity;
use App\Livewire\Auth\Authabout;
use App\Livewire\Auth\AuthAddProduct;
use App\Livewire\Auth\AuthBooking;
use App\Livewire\Auth\AuthCart;
use App\Livewire\Auth\Authcontact;
use App\Livewire\Auth\AuthHome;
use App\Livewire\Auth\Authlogin;
use App\Livewire\Auth\AuthProfile;
use App\Livewire\Auth\AuthSignUp;
use App\Http\Controllers\Order;
use App\Http\Controllers\OrderController;
use App\Livewire\Auth\AuthCartCheckout;

// Admin
Route::get('/KennethRoxas', AuthAdmin::class)->name('dashboard');
Route::get('/users', AuthAdminUser::class)->middleware(UserActivity::class)->name('user');
Route::get('/AdminProduct', AuthAddProduct::class)->name('adding');
Route::get('/list', AuthProductList::class)->name('list');
Route::get('/bookingOrder', AuthBookingList::class)->name('bookingList');
Route::get('/orders', \App\Livewire\Auth\Admin\AuthOrders::class)->middleware('auth')->name('placedOrder');

// Mailing
Route::get('/send-order-confirmation', [OrderController::class, 'sendOrderConfirmation'])->name('send.order.confirmation');
Route::get('send-email', [Order::class, 'sendEmail'])->name('PlaceOrder');

// User
Route::get('/', AuthHome::class)->name('home');
Route::get('/register', AuthSignUp::class)->name('register');
Route::get('/login', AuthLogin::class)->name('login');
Route::get('/cart', AuthCart::class)->name('cart');
Route::get('/aboutUs', Authabout::class)->name('about');
Route::get('/profile', AuthProfile::class)->name('profile');
Route::get('/product', \App\Livewire\Auth\Authproduct::class)->name('product');
Route::get('/contact', Authcontact::class)->name('contact');

// To order
Route::get('/Booking/{id}', AuthBooking::class)->name('booking');
Route::post('/CartPage', [\App\Http\Controllers\CartController::class, 'store'])->name('addToCart');
Route::get('/cart/checkout', AuthCartCheckout::class)->name('cart.checkout');
Route::get('/checkout/{id}', AuthCheckOut::class)->name('checkout');

Route::get('updateProduct/{id}', AuthupdateProduct::class)->name('updateProduct');

Route::get('product-overview/{id}', AuthOverview::class)->name('overview');
Route::get('booking-overview/{id}', AuthBookingOverview::class)->name('bookingOverview');

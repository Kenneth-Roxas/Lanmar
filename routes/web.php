<?php

use App\Livewire\Auth\Authabout;
use App\Livewire\Auth\Authcontact;
use App\Livewire\Auth\AuthHome;
use App\Livewire\Auth\Authlogin;
use App\Livewire\Auth\Authproduct;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/LanMar/HomePage', AuthHome::class)->name('home');
Route::get('/Lanmar/Login', Authlogin::class)->name('login');
Route::get('/Lanmar/Product', Authproduct::class)->name('product');
Route::get('/Lanmar/AboutUs', Authabout::class)->name('about');
Route::get('/Lanmar/Contact', Authcontact::class)->name('contact');
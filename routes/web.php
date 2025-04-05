<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');


Route::get('about', function () {
    return view('pages.about');
})->name('about');


Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');


Livewire::setScriptRoute(function($handle) {
    return Route::get('/'. env('FILAMENT_PATH') . '/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function($handle) {
    return Route::get('/' . env('FILAMENT_PATH') . '/livewire/update', $handle);
});

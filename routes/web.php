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


Route::get('social-media-marketing', function () {
    return view('pages.smm');
})->name('smm');


Route::get('social-media-community-management', function () {
    return view('pages.smcm');
})->name('smcm');


Route::get('influencer', function () {
    return view('pages.influencer');
})->name('influencer');



Route::get('social-media-optimization', function () {
    return view('pages.so');
})->name('so');


Livewire::setScriptRoute(function($handle) {
    return Route::get('/'. env('FILAMENT_PATH') . '/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function($handle) {
    return Route::get('/' . env('FILAMENT_PATH') . '/livewire/update', $handle);
});

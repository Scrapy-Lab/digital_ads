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
    return view('pages.social media marketing');
})->name('social-media-marketing');

Route::get('social-media-optimization', function () {
    return view('pages.Social-Optimization');
})->name('social-media-optimization');

Route::get('social-media-community-management', function () {
    return view('pages.Social Management');
})->name('social-media-community-management');

Route::get('influencer-marketing', function () {
    return view('pages.Influencer');
})->name('influencer-marketing');

Route::get('digital-marketing-strategy', function () {
    return view('pages.Digital Marketing Strategy');
})->name('digital-marketing-strategy');

Route::get('search-engine-marketing', function () {
    return view('pages.Search Engine Marketing');
})->name('search-engine-marketing');

Route::get('digital-social-media-marketing', function () {
    return view('pages.Social Marketing');
})->name('digital-social-media-marketing');

Route::get('online-reputation-management', function () {
    return view('pages.Online Reputation Management');
})->name('online-reputation-management');

Route::get('whatsapp-marketing', function () {
    return view('pages.Whatsapp Marketing');
})->name('whatsapp-marketing');

Route::get('voice-sms', function () {
    return view('pages.Voice sms');
})->name('voice-sms');

Route::get('bulk-sms', function () {
    return view('pages.Bulk sms');
})->name('bulk-sms');

Route::get('graphic-designing', function () {
    return view('pages.Graphic Designing');
})->name('graphic-designing');

Route::get('logo-designing', function () {
    return view('pages.Logo Designing');
})->name('logo-designing');

Route::get('photography', function () {
    return view('pages.Photography');
})->name('photography');

Route::get('videography', function () {
    return view('pages.Videography');
})->name('videography');

Route::get('website-design-and-development', function () {
    return view('pages.Website Design & Development');
})->name('website-design-and-development');

Route::get('ecommerce-development', function () {
    return view('pages.Ecommerce Development');
})->name('ecommerce-development');

Route::get('wordpress-website-development', function () {
    return view('pages.Wordpress Website Development');
})->name('wordpress-website-development');

Route::get('website-manintanance', function () {
    return view('pages.Website Manintanance');
})->name('website-manintanance');

Route::get('content-writing', function () {
    return view('pages.Seo Content Writing');
})->name('content-writing');

Route::get('blog-writing', function () {
    return view('pages.Blog Writing');
})->name('blog-writing');

Route::get('promotional-writing', function () {
    return view('pages.Promotional Writing');
})->name('promotional-writing');

Route::get('copy-writing', function () {
    return view('pages.Copywriting');
})->name('copy-writing');

Livewire::setScriptRoute(function($handle) {
    return Route::get('/'. env('FILAMENT_PATH') . '/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function($handle) {
    return Route::get('/' . env('FILAMENT_PATH') . '/livewire/update', $handle);
});

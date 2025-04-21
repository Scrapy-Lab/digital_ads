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

Route::get('social media marketing', function () {
    return view('pages.social media marketing');
})->name('social media marketing');

Route::get('social media optimization', function () {
    return view('pages.social Optimization');
})->name('social media optimization');

Route::get('social media Community Management', function () {
    return view('pages.social Management');
})->name('social media Community Management');

Route::get('Influencer Marketing', function () {
    return view('pages.Influencer');
})->name('Influencer Marketing');

Route::get('Digital Marketing Strategy', function () {
    return view('pages.Digital Marketing Strategy');
})->name('Digital Marketing Strategy');

Route::get('Search Engine Marketing', function () {
    return view('pages.Search Engine Marketing');
})->name('Search Engine Marketing');

Route::get('(SEO) Social Media Marketing', function () {
    return view('pages.Social Marketing');
})->name('(SEO) Social Media Marketing');

Route::get('Online Reputation Management', function () {
    return view('pages.Online Reputation Management');
})->name('Online Reputation Management');

Route::get('Whatsapp Marketing', function () {
    return view('pages.Whatsapp Marketing');
})->name('Whatsapp Marketing');

Route::get('Voice Sms', function () {
    return view('pages.Voice sms');
})->name('Voice Sms');

Route::get('Bulk Sms', function () {
    return view('pages.Bulk sms');
})->name('Bulk Sms');

Route::get('Graphic Designing', function () {
    return view('pages.Graphic Designing');
})->name('Graphic Designing');

Route::get('Logo Designing', function () {
    return view('pages.Logo Designing');
})->name('Logo Designing');

Route::get('PhotoGraphy', function () {
    return view('pages.Photography');
})->name('PhotoGraphy');

Route::get('VideoGraphy', function () {
    return view('pages.Videography');
})->name('VideoGraphy');

Route::get('Website Design & Development', function () {
    return view('pages.Website Design & Development');
})->name('Website Design & Development');

Route::get('Ecommerce Development', function () {
    return view('pages.Ecommerce Development');
})->name('Ecommerce Development');

Route::get('Wordpress Website Development', function () {
    return view('pages.Wordpress Website Development');
})->name('Wordpress Website Development');

Route::get('Website Manintanance', function () {
    return view('pages.Website Manintanance');
})->name('Website Manintanance');

Route::get('Seo Content Writing', function () {
    return view('pages.Seo Content Writing');
})->name('Seo Content Writing');

Route::get('Blog Writing', function () {
    return view('pages.Blog Writing');
})->name('Blog Writing');

Route::get('Promotional Writing', function () {
    return view('pages.Promotional Writing');
})->name('Promotional Writing');

Route::get('Copy Writing', function () {
    return view('pages.Copywriting');
})->name('Copy Writing');

Livewire::setScriptRoute(function($handle) {
    return Route::get('/'. env('FILAMENT_PATH') . '/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function($handle) {
    return Route::get('/' . env('FILAMENT_PATH') . '/livewire/update', $handle);
});

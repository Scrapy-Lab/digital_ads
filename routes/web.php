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
    return view('pages.social Optimization');
})->name('social media optimization');

Route::get('social-media-community-management', function () {
    return view('pages.social Management');
})->name('social media Community Management');

Route::get('influencer-marketing', function () {
    return view('pages.Influencer');
})->name('Influencer Marketing');

Route::get('digital-marketing-strategy', function () {
    return view('pages.Digital Marketing Strategy');
})->name('Digital Marketing Strategy');

Route::get('search-engine-marketing', function () {
    return view('pages.Search Engine Marketing');
})->name('Search Engine Marketing');

Route::get('digital-social-media-marketing', function () {
    return view('pages.Social Marketing');
})->name('digital-social-media-marketing');

Route::get('online-reputation-management', function () {
    return view('pages.Online Reputation Management');
})->name('Online Reputation Management');

Route::get('whatsapp-marketing', function () {
    return view('pages.Whatsapp Marketing');
})->name('Whatsapp Marketing');

Route::get('voice-sms', function () {
    return view('pages.Voice sms');
})->name('Voice Sms');

Route::get('bulk-sms', function () {
    return view('pages.Bulk sms');
})->name('Bulk Sms');

Route::get('graphic-designing', function () {
    return view('pages.Graphic Designing');
})->name('Graphic Designing');

Route::get('logo-designing', function () {
    return view('pages.Logo Designing');
})->name('Logo Designing');

Route::get('photography', function () {
    return view('pages.Photography');
})->name('PhotoGraphy');

Route::get('videography', function () {
    return view('pages.Videography');
})->name('VideoGraphy');

Route::get('website-design-and-development', function () {
    return view('pages.Website Design & Development');
})->name('Website Design & Development');

Route::get('ecommerce-development', function () {
    return view('pages.Ecommerce Development');
})->name('Ecommerce Development');

Route::get('wordpress-website-development', function () {
    return view('pages.Wordpress Website Development');
})->name('Wordpress Website Development');

Route::get('website-manintanance', function () {
    return view('pages.Website Manintanance');
})->name('Website Manintanance');

Route::get('content-writing', function () {
    return view('pages.Seo Content Writing');
})->name('Seo Content Writing');

Route::get('blog-writing', function () {
    return view('pages.Blog Writing');
})->name('Blog Writing');

Route::get('promotional-writing', function () {
    return view('pages.Promotional Writing');
})->name('Promotional Writing');

Route::get('copy-writing', function () {
    return view('pages.Copywriting');
})->name('Copy Writing');

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

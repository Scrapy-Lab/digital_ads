<?php

use App\Http\Controllers\ContentCreationServiceController;
use App\Http\Controllers\SocialMediaServiceController;
use App\Http\Controllers\DigitalMarketingServiceController;
use App\Http\Controllers\MobileMarketingServiceController;
use App\Http\Controllers\VisualDesigningServiceController;
use App\Http\Controllers\WebsiteDevelopmentServiceController;
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

Route::get('social-media-marketing', [SocialMediaServiceController::class, 'socialMediaMarketing'])->name('social-media-marketing');

Route::get('social-media-optimization', [SocialMediaServiceController::class, 'socialMediaOptimization'])->name('social-media-optimization');

Route::get('social-media-community-management', [SocialMediaServiceController::class, 'socialMediaCommunityManagement'])->name('social-media-community-management');

Route::get('influencer-marketing',[SocialMediaServiceController::class, 'influencerMarketing'])->name('influencer-marketing');

Route::get('digital-marketing-strategy', [DigitalMarketingServiceController::class, 'digitalMarketingStrategy'])->name('digital-marketing-strategy');

Route::get('search-engine-marketing', [DigitalMarketingServiceController::class, 'searchEngineMarketing'])->name('search-engine-marketing');

Route::get('digital-social-media-marketing',[DigitalMarketingServiceController::class, 'digitalSocialMediaMarketing'])->name('digital-social-media-marketing');

Route::get('online-reputation-management', [DigitalMarketingServiceController::class, 'onlineReputationManagement'])->name('online-reputation-management');

Route::get('whatsapp-marketing',[MobileMarketingServiceController::class, 'WhatsappMarketing'])->name('whatsapp-marketing');

Route::get('voice-sms', [MobileMarketingServiceController::class, 'voiceSms'])->name('voice-sms');

Route::get('bulk-sms', [MobileMarketingServiceController::class, 'bulkSms'])->name('bulk-sms');

Route::get('graphic-designing', [VisualDesigningServiceController::class, 'graphicDesigning'])->name('graphic-designing');

Route::get('logo-designing',  [VisualDesigningServiceController::class, 'logoDesigning'])->name('logo-designing');

Route::get('photography',  [VisualDesigningServiceController::class, 'photography'])->name('photography');

Route::get('videography',  [VisualDesigningServiceController::class, 'videography'])->name('videography');

Route::get('website-design-and-development', [WebsiteDevelopmentServiceController::class, 'websiteDesigAndDevelopment'])->name('website-design-and-development');

Route::get('ecommerce-development', [WebsiteDevelopmentServiceController::class, 'ecommerceDevelopment'])->name('ecommerce-development');

Route::get('wordpress-website-development',[WebsiteDevelopmentServiceController::class, 'wordpressWebsiteDevelopment'])->name('wordpress-website-development');

Route::get('website-manintanance', [WebsiteDevelopmentServiceController::class, 'websiteManintanance'])->name('website-manintanance');

Route::get('content-writing', [ContentCreationServiceController::class, 'contentWriting'])->name('content-writing');

Route::get('blog-writing', [ContentCreationServiceController::class, 'blogWriting'])->name('blog-writing');

Route::get('promotional-writing',  [ContentCreationServiceController::class, 'promotionalWriting'])->name('promotional-writing');

Route::get('copy-writing', [ContentCreationServiceController::class, 'copyWriting'])->name('copy-writing');

Livewire::setScriptRoute(function($handle) {
    return Route::get('/'. env('FILAMENT_PATH') . '/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function($handle) {
    return Route::get('/' . env('FILAMENT_PATH') . '/livewire/update', $handle);
});

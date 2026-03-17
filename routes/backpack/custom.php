<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('call', 'CallCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::crud('about', 'AboutCrudController');
    Route::crud('footer', 'FooterCrudController');
    Route::crud('frontend', 'FrontendCrudController');
    Route::crud('location', 'LocationCrudController');
    Route::crud('message', 'MessageCrudController');
    Route::crud('mission', 'MissionCrudController');
    Route::crud('symptom', 'SymptomCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('value', 'ValueCrudController');
    Route::crud('w-t-e', 'WTECrudController');
    Route::crud('user-symptom', 'UserSymptomCrudController');
    Route::crud('trigger', 'TriggerCrudController');
    Route::crud('carousel', 'CarouselCrudController');
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */

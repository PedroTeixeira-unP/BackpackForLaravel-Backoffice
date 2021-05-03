<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('tag', 'TagCrudController');
    Route::crud('pacotevip', 'PacotevipCrudController');
    Route::crud('rprole', 'RProleCrudController');
    Route::crud('listapacote', 'ListapacoteCrudController');
    Route::crud('banners', 'BannersCrudController');
    Route::crud('banner', 'BannerCrudController');
}); // this should be the absolute last line of this file
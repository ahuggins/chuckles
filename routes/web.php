<?php

Route::domain('{account}.playground.test')->group(function () {
    Route::get('/', function ($account) {
        $site = App\Site::findByKey($account);
        return view($site->site_key.'.home', [
            'title' => 'hardcoded'
        ]);
    });

    Route::get('{prefix}/{slug?}', function ($account, $prefix, $slug = null) {
        $site = App\Site::findByKey($account);
        if (is_null($slug)) {
            $slug = $prefix;
        }

        $page = $site->pages()->where('slug', $slug)->firstOrFail();
        
        return view('site.home', ['title' => $page->title]);
    });
});

Route::get('/', function () {
    return view('site.home', [
        'title' => 'hardcoded'
    ]);
});

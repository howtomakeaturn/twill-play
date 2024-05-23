<?php

use A17\Twill\Facades\TwillRoutes;

// Register Twill routes here eg.
// TwillRoutes::module('posts');

// TwillRoutes::module('pages');
// TwillRoutes::module('offices');

Route::group(['prefix' => 'about'], function () {
    TwillRoutes::module('pages');
    TwillRoutes::module('offices');
});

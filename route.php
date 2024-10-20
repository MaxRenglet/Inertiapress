<?php

use InertiaPress\Route\Route;
use BoxyBird\Inertia\Inertia;

Route::get('/test', function () {
    echo "Test of get method";
});

Route::post('/test', function () {
    echo "Test of post method";
});


Route::get('page', function () {
    Inertia::render('Front', []);
});


Route::get('single', function () {
    Inertia::render('Front', []);
});

Route::get('/', function () {
    Inertia::render('Front', []);
});

Route::get('404', function () {
    echo "404";
});

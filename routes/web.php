<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        'pages' => [
            [
                'name' => 'Scopri',
                'route' => 'discover'
            ],
            [
                'name' => 'Contatti',
                'route' => 'contacts'
            ],
            [
                'name' => 'Mappa del sito',
                'route' => 'map'
            ],
            [
                'name' => 'Dove siamo',
                'route' => 'location'
            ],
        ]
    ];

    return view('home', $data);
})->name('home');

Route::get('/discover', function () {
    return view('discover');
})->name('discover');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/location', function () {
    return view('location');
})->name('location');

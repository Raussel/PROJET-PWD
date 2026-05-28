<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('accueil');

Route::get('/apropos', function () {
    return view('apropos');
})->name('apropos');

Route::get('/avis', function () {
    return view('avis');
})->name('avis');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/connexion', function () {
    return view('connexion');
})->name('connexion');

Route::get('/localisation', function () {
    return view('localisation');
})->name('localisation');
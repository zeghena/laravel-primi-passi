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
    $title = 'Homepage';
    $paragraph = 'Welcome in Laravel Paradise';

    $students = [
        'Mattia',
        'Serena',
        'Jonathan',
        'Simone',
        'Luca',
        'Vincenzo',
        'Sissy',
        'Andrea',
        'Nicola',
        'Davide',
    ];

    return view('home', compact('title', 'paragraph', 'students'));


});

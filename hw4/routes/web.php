<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'name' => 'Ivan',
        'age' => 17,
        'position' => 'developer',
        'address' => 'Moscow'
    ];
    return view('home', $data);
});

Route::get('/contacts', function () {
    $data = [
        'address' => 'Lenina street',
        'post_code' => 101000,
        'email' => 'ivan@gmail.com',
        'phone' => '89120001234'
    ];
    return view('contacts', $data);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormProcessor;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userform', [FormProcessor::class, 'index']);

Route::post('/store_form', [FormProcessor::class, 'store']);

Route::get('/hello/{first_name}', [FormProcessor::class, 'hello'])->name('hello'); // новый маршрут с именем

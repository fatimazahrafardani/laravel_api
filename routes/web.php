<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/contacts',[ContactController::class,'contacts']);
 Route::post('/contacts', [ContactController::class, 'createContact'])->name('contacts.createContact');
 
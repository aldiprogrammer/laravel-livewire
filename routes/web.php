<?php

use App\Http\Controllers\Pegawaibaru;
use App\Livewire\App\Editpegawai;
use App\Livewire\Counter;
use App\Livewire\Post;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get("/", Post::class)->name('crud');
// Route::get('/counter', [Counter::class, 'render'])->name('counter');

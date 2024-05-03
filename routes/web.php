<?php

use App\Livewire\Movies;
use App\Livewire\SingleMovie;
use Illuminate\Support\Facades\Route;

Route::get('/', Movies::class);
Route::get('/view/{id}', SingleMovie::class);
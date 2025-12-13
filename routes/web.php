<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\BookList;

Route::get('/books', BookList::class);

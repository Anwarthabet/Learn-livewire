<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\BookList;
use App\Livewire\Posts;

Route::get('/books', BookList::class);
Route::get('/', BookList::class);
Route::get('/posts', Posts\Index::class);

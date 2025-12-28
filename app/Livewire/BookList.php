<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookList extends Component
{
    public $name="Anwar Hossain mohammed";
    public $tile="book list component";

    public function deleteBook($id)
    {
        Book::find($id)->delete();
    }
    public function render()
    {
         return view('livewire.book-list', ['books' => Book::all(),]);
    }
}

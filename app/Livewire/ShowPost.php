<?php

namespace App\Livewire;
use App\Models\Post;

use Livewire\Component;

class ShowPost extends Component
{
    public function render()
    {
        return view('livewire.posts.index', [
            'posts' => Post::with('author')->latest()->get()
        ]);
    }
}

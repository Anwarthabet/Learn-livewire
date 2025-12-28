<div class="posts-container">
    <h1 class="page-title">All Posts</h1>

    <ul class="posts-list">
        @foreach ($posts as $post)
            <li class="post-card" wire:key="post-{{ $post->id }}">
                <h2 class="post-title">{{ $post->title }}</h2>

                <p class="post-meta">
                    By {{ $post->author->name ?? 'Unknown' }}
                    • {{ $post->created_at->format('M d, Y') }}
                </p>

                <p class="post-excerpt">
                    {{ Str::limit($post->content, 120) }}
                </p>
            
            </li>
        @endforeach
    </ul>
</div>

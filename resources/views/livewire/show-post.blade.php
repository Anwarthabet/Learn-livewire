<div class="max-w-3xl mx-auto bg-white shadow rounded p-6">
    <h1 class="text-2xl font-bold mb-2">
        {{ $post->title }}
    </h1>

    <div class="text-sm text-gray-500 mb-4">
        By {{ $post->author->name ?? 'Unknown' }}
        • {{ $post->created_at->format('M d, Y') }}
    </div>

    <div class="prose max-w-none">
        {{ $post->content }}
    </div>

    <div class="mt-6">
        <button
            wire:click="refreshPost"
            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
        >
            Refresh
        </button>
    </div>
</div>

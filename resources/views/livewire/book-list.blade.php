<div class="max-w-4xl mx-auto p-6">

    <header class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Books List</h1>
        
    </header>

    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach($books as $book)
            <li
                wire:key="{{ $book->id }}"
                class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 hover:shadow-md transition"
            >
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">
                            {{ $book->title }}
                        </h3>
                        <h4 class="text-sm text-gray-600">
                            by {{ $book->author }}
                        </h4>
                    </div>

                    <button
                        wire:click="delete({{ $book->id }})"
                        class="text-red-500 text-sm hover:text-red-700 transition"
                    >
                        Delete
                    </button>
                </div>

                <div class="mt-4 flex items-center justify-between">
                    <span class="text-sm text-gray-500">Rating</span>
                    <span class="text-sm font-medium text-indigo-600">
                        {{ $book->rating }}/10
                    </span>
                </div>

                <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                    <div
                        class="bg-indigo-500 h-2 rounded-full"
                        style="width: {{ $book->rating * 10 }}%"
                    ></div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

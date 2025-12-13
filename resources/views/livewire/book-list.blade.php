<div>
    <header class="flex justify-between items-center mb-4">
        <h1 class="text-3xl font-bold">Book List Component</h1>
    </header>
    <div class="mb-4 bg-blue-200 p-4 rounded">
        <h1>the Name is : {{ $name }}</h1>
        <form wire:submit.prevent="$refresh" class="mb-4">
            <label for="name" class="block mb-2 font-bold">Enter your name:</label>
            <input type="text" id="name" wire:model.live="name" class="border p-2 rounded w-150"
                placeholder="Your name here">
            <button class="bg-blue-500 text-white px-4 py-2 rounded ml-2 hover :bg-blue-200">Submit</button>
        </form>
    </div>
    <div class="bg-gray-900 p-4 rounded text-white">
  <ul class="list">
    @foreach($books as $book)
        <li wire:key="{{ $book->id }}">
            <button
                wire:click="delete({{ $book->id }})">
                Delete
            </button>

            <h3>{{ $book->title }}</h3>
            <h4>{{ $book->author }}</h4>
            <p>Rating: {{ $book->rating }}/10</p>
        </li>
    @endforeach
</ul>

    </div>
</div>
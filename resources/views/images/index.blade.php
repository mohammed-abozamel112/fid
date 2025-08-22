<x-master-layout>

    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Images</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-4">
            <a href="{{ route('images.create', ['lang' => app()->getLocale()]) }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Upload New Image
            </a>
        </div>

        @if ($images->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($images as $image)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('storage/' . $image->path_url) }}" alt="{{ $image->alt_text }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">{{ $image->name }}</h3>
                            <p class="text-gray-600 text-sm mb-2">{{ $image->caption }}</p>
                            <p class="text-gray-500 text-xs mb-3">{{ $image->type }}</p>

                            <div class="flex space-x-2">
                                <a href="{{ route('images.show', ['lang' => app()->getLocale(), 'image' => $image->id]) }}"
                                    class="text-blue-600 hover:underline text-sm">View</a>
                                <a href="{{ route('images.edit', ['lang' => app()->getLocale(), 'image' => $image->id]) }}"
                                    class="text-yellow-600 hover:underline text-sm">Edit</a>
                                <form action="{{ route('images.destroy', ['lang' => app()->getLocale(), 'image' => $image->id]) }}"
                                    method="POST" class="inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this image?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline text-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $images->links() }}
            </div>
        @else
            <p class="text-gray-500">No images found.</p>
        @endif
    </div>
</x-master-layout>

<x-master-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">{{ $blog->title }}</h1>

        @if ($blog->image)
            <div class="mb-4">
                <img src="{{ $blog->image ?: asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                    class="max-w-full h-auto rounded">
            </div>
        @endif

        <div class="mb-4">
            <p>{!! nl2br(e($blog->content)) !!}</p>
        </div>

        <div class="text-gray-600 text-sm mb-4">
            Created at: {{ $blog->created_at }}
        </div>

        <div>
            <a href="{{ route('blogs.index', ['lang' => app()->getLocale()]) }}" class="text-blue-600 hover:underline">Back
                to Blogs</a>
        </div>
    </div>
</x-master-layout>

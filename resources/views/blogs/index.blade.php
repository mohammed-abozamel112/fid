<x-master-layout>

    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Blogs</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-4">
            <a href="{{ route('blogs.create', ['lang' => app()->getLocale()]) }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create New Blog
            </a>
        </div>

        @if ($blogs->count())
            <table class="min-w-full bg-white border border-gray-200 text-center">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Title</th>
                        <th class="py-2 px-4 border-b">Image</th>
                        <th class="py-2 px-4 border-b">Created At</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('blogs.show', ['lang' => app()->getLocale(), 'blog' => $blog->id]) }}"
                                    class="text-blue-600 hover:underline">
                                    {{ $blog->title }}
                                </a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <img src="{{ asset('storage/' . $blog->image) }}" width="300px" alt="">
                            </td>
                            <td class="py-2 px-4 border-b">{{ $blog->created_at }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('blogs.edit', ['lang' => app()->getLocale(), 'blog' => $blog->id]) }}"
                                    class="text-yellow-500 hover:underline mr-2">Edit</a>
                                <form
                                    action="{{ route('blogs.destroy', ['lang' => app()->getLocale(), 'blog' => $blog->id]) }}"
                                    method="POST" class="inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $blogs->links() }}
            </div>
        @else
            <p>No blogs found.</p>
        @endif
    </div>
</x-master-layout>

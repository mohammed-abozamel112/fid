<x-master-layout>

    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Edit Image</h1>

        <form action="{{ route('images.update', ['lang' => app()->getLocale(), 'image' => $image->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- English Fields -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">English Information</h3>

                    <div class="mb-4">
                        <label for="name_en" class="block text-gray-700 font-bold mb-2">Name (English):</label>
                        <input type="text" name="name_en" id="name_en" value="{{ old('name_en', $image->name_en) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('name_en')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="alt_text_en" class="block text-gray-700 font-bold mb-2">Alt Text (English):</label>
                        <input type="text" name="alt_text_en" id="alt_text_en" value="{{ old('alt_text_en', $image->alt_text_en) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('alt_text_en')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="caption_en" class="block text-gray-700 font-bold mb-2">Caption (English):</label>
                        <textarea name="caption_en" id="caption_en" rows="3"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('caption_en', $image->caption_en) }}</textarea>
                        @error('caption_en')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Arabic Fields -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Arabic Information</h3>

                    <div class="mb-4">
                        <label for="name_ar" class="block text-gray-700 font-bold mb-2">Name (Arabic):</label>
                        <input type="text" name="name_ar" id="name_ar" value="{{ old('name_ar', $image->name_ar) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('name_ar')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="alt_text_ar" class="block text-gray-700 font-bold mb-2">Alt Text (Arabic):</label>
                        <input type="text" name="alt_text_ar" id="alt_text_ar" value="{{ old('alt_text_ar', $image->alt_text_ar) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('alt_text_ar')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="caption_ar" class="block text-gray-700 font-bold mb-2">Caption (Arabic):</label>
                        <textarea name="caption_ar" id="caption_ar" rows="3"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('caption_ar', $image->caption_ar) }}</textarea>
                        @error('caption_ar')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Common Fields -->
            <div class="mb-4">
                <label for="type" class="block text-gray-700 font-bold mb-2">Image Type:</label>
                <select name="type" id="type" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="">Select Type</option>
                    <option value="gallery" {{ old('type', $image->type) == 'gallery' ? 'selected' : '' }}>Gallery</option>
                    <option value="banner" {{ old('type', $image->type) == 'banner' ? 'selected' : '' }}>Banner</option>
                    <option value="logo" {{ old('type', $image->type) == 'logo' ? 'selected' : '' }}>Logo</option>
                    <option value="other" {{ old('type', $image->type) == 'other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('type')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Current Image:</label>
                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                    <img src="{{ asset('storage/' . $image->path_url) }}" alt="{{ $image->alt_text }}" class="w-48 h-48 object-cover rounded">
                </div>

                <label for="new_image" class="block text-gray-700 font-bold mb-2 mt-4">Upload New Image (optional):</label>
                <input type="file" name="image" id="new_image"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Image
                </button>
                <a href="{{ route('images.show', ['lang' => app()->getLocale(), 'image' => $image->id]) }}"
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</x-master-layout>

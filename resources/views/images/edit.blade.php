<x-master-layout>

    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Edit Image</h1>

        <form action="{{ route('images.update', ['lang' => app()->getLocale(), 'image' => $image->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- English Fields -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">English Information</h3>

                    <div class="mb-4">
                        <label for="name_en" class="block text-gray-700 font-bold mb-2">Name (English):</label>
                        <input type="text" name="name_en" id="name_en"
                            value="{{ old('name_en', $image->name_en) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                        @error('name_en')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="alt_text_en" class="block text-gray-700 font-bold mb-2">Alt Text (English):</label>
                        <input type="text" name="alt_text_en" id="alt_text_en"
                            value="{{ old('alt_text_en', $image->alt_text_en) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
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
                        <input type="text" name="name_ar" id="name_ar"
                            value="{{ old('name_ar', $image->name_ar) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                        @error('name_ar')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="alt_text_ar" class="block text-gray-700 font-bold mb-2">Alt Text (Arabic):</label>
                        <input type="text" name="alt_text_ar" id="alt_text_ar"
                            value="{{ old('alt_text_ar', $image->alt_text_ar) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
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
                <label for="type_en" class="block text-gray-700 font-bold mb-2">Image Type:</label>
                <select name="type_en" id="type_en"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                    <option value="">Select Type</option>
                    <option value="blog" {{ old('type_en') == 'blog' ? 'selected' : '' }}>Blog</option>
                    <option value="service" {{ old('type_en') == 'service' ? 'selected' : '' }}>Service</option>
                    <option value="gallery" {{ old('type_en') == 'gallery' ? 'selected' : '' }}>Gallery</option>
                    <option value="profile" {{ old('type_en') == 'profile' ? 'selected' : '' }}>Profile</option>
                    <option value="client" {{ old('type_en') == 'client' ? 'selected' : '' }}>Client</option>
                    <option value="works" {{ old('type_en') == 'works' ? 'selected' : '' }}>Works</option>
                    <option value="home" {{ old('type_en') == 'home' ? 'selected' : '' }}>Home</option>
                    <option value="about" {{ old('type_en') == 'about' ? 'selected' : '' }}>About</option>
                </select>
                @error('type_en')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="type_ar" class="block text-gray-700 font-bold mb-2">Image Type:</label>
                <select name="type_ar" id="type_ar"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                    <option value="">Select Type</option>
                    <option value="مدونه" {{ old('type_ar') == 'مدونه' ? 'selected' : '' }}>مدونه</option>
                    <option value="خدمة" {{ old('type_ar') == 'خدمة' ? 'selected' : '' }}>خدمة</option>
                    <option value="معرض" {{ old('type_ar') == 'معرض' ? 'selected' : '' }}>معرض</option>
                    <option value="ملف شخصي" {{ old('type_ar') == 'ملف شخصي' ? 'selected' : '' }}>ملف شخصي</option>
                    <option value="عميل" {{ old('type_ar') == 'عميل' ? 'selected' : '' }}>عميل</option>
                    <option value="أعمال" {{ old('type_ar') == 'أعمال' ? 'selected' : '' }}>أعمال</option>
                    <option value="الرئيسية" {{ old('type_ar') == 'الرئيسية' ? 'selected' : '' }}>الرئيسية</option>
                    <option value="حول" {{ old('type_ar') == 'حول' ? 'selected' : '' }}>حول</option>
                </select>
                @error('type_ar')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Current Image:</label>
                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                    <img src="{{ asset('storage/' . $image->path_url) }}" alt="{{ $image->alt_text }}"
                        class="w-48 h-48 object-cover rounded">
                </div>

                <label for="new_image" class="block text-gray-700 font-bold mb-2 mt-4">Upload New Image
                    (optional):</label>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const typeArSelect = document.getElementById('type_ar');
            const typeEnSelect = document.getElementById('type_en');

            const TypeMap = {
                //ar to en
                'مدونه': 'blog',
                'خدمة': 'service',
                'معرض': 'gallery',
                'ملف شخصي': 'profile',
                'عميل': 'client',
                'أعمال': 'works',
                'الرئيسية': 'home',
                'حول': 'about',
                //en to ar
                'blog': 'مدونه',
                'service': 'خدمة',
                'gallery': 'معرض',
                'profile': 'ملف شخصي',
                'client': 'عميل',
                'works': 'أعمال',
                'home': 'الرئيسية',
                'about': 'حول',
            };

            typeArSelect.addEventListener('change', function() {
                const selectedAr = typeArSelect.value;
                const correspondingEn = TypeMap[selectedAr];
                if (typeEnSelect.value !== correspondingEn) {
                    typeEnSelect.value = correspondingEn;
                }
            });

            typeEnSelect.addEventListener('change', function() {
                const selectedEn = typeEnSelect.value;
                const correspondingAr = TypeMap[selectedEn];
                if (typeArSelect.value !== correspondingAr) {
                    typeArSelect.value = correspondingAr;
                }
            });
        });
    </script>
</x-master-layout>

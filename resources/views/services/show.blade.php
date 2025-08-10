<x-master-layout>
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-4">{{ $service->title }}</h1>

    @if($service->image)
        <div class="mb-4">
            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="max-w-full h-auto rounded">
        </div>
    @endif

    <div class="mb-4">
        <p>{!! nl2br(e($service->description)) !!}</p>
    </div>

    <div class="text-gray-600 text-sm mb-4">
        Created at: {{ $service->created_at->format('Y-m-d H:i') }}
    </div>

    <div>
        <a href="{{ route('services.index',['lang' => app()->getLocale()]) }}" class="text-blue-600 hover:underline">Back to Services</a>
    </div>
</div>
</x-master-layout>

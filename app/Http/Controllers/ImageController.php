<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::latest()->paginate(10);
        return view('images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImageRequest $request)
    {
        Image::create($request->validated());
        // Optionally handle file upload if needed
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $image = Image::latest()->first();
            $image->update(['image' => $path]);
        }
        return redirect()->route('images.index', ['lang' => app()->getLocale()])->with('success', 'Image created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        return view('images.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        return view('images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        $image->update($request->validated());

        // Optionally handle file upload if needed
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $image->update(['image' => $path]);
        }
        return redirect()->route('images.index', ['lang' => app()->getLocale()])->with('success', 'Image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        if ($image->image) {
            Storage::disk('public')->delete($image->image);
        }
        $image->delete();
        return redirect()->route('images.index', ['lang' => app()->getLocale()])->with('success', 'Image deleted successfully.');
    }
}

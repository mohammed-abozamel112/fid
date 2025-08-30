<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Image;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($lang)
    {
        $tags = Tag::latest()->paginate(10);
        return view('tags.index', compact('tags', 'lang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($lang)
    {
        return view('tags.create', ['lang' => $lang]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        Tag::create($request->validated());
        return redirect()->route('tags.index', ['lang' => app()->getLocale()])->with('success', 'Tag created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($lang, Tag $tag)
    {
        // images with tag_id relation
        $imagesTag=Image::where('tag_id', $tag->id)->get();

        return view('tags.show', compact('tag', 'imagesTag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lang, Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request,$lang, Tag $tag)
    {
        $tag->update($request->validated());
        return redirect()->route('tags.index', ['lang' => $lang])->with('success', 'Tag updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($lang, Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index', ['lang' => $lang])->with('success', 'Tag deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = Blog::with('user')->latest()->paginate(10);
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        // Validate and store the blog data
        $blog = Blog::create($request->validated());
        // Optionally, you can handle file uploads or other processing here
        // For example, if you have a file upload, you can handle it like this:
        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('images/blogs', 'public');
            $blog->save();
        }
        // Redirect to the index page with a success message
        return redirect()->route('blogs.index', ['lang' => app()->getLocale()])->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($lang,Blog $blog)
    {

        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lang,Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $blog->update($request->validated());

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->update(['image' => $request->file('image')->store('images/blogs', 'public')]);
        }

        return redirect()->route('blogs.index', ['lang' => app()->getLocale()])->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();

        return redirect()->route('blogs.index', ['lang' => app()->getLocale()])->with('success', 'Blog deleted successfully.');
    }
}

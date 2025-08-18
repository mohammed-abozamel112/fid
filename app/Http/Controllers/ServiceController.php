<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Tag;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($lang)
    {
        // Get all services with their tags (for the filter buttons)
        $services = Service::with('tags')->get();

        // Handle the filtering logic
        if (request()->has('filter')) {
            // Get tags for the specific service if filter is applied
            $filteredTags = Service::findOrFail(request('filter'))->tags;
        } else {
            // Get all unique tags if no filter is applied
            $filteredTags = Tag::all()->unique('id');
            // Or if you want only tags that belong to services:
            // $filteredTags = Tag::whereHas('service')->get()->unique('id');
        }

        return view('services.index', compact('services', 'filteredTags'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create($lang)
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request, $lang)
    {
        $service = Service::create($request->validated());
        // Optionally handle file upload if needed
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('services', 'public');
            $service->update(['image' => $path]);
        }
        return redirect()->route('services.index', ['lang' => $lang])->with('success', 'Service created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($lang, Service $service)
    {
        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lang, Service $service)
    {
        return view('services.edit', compact('service', 'lang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, $lang, Service $service)
    {
        $service->update($request->validated());
        // Optionally handle file upload if needed
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('services', 'public');
            $service->update(['image' => $path]);
        }
        return redirect()->route('services.index', ['lang' => $lang])->with('success', 'Service updated successfully.');
    }

    /**
     * Filter services via AJAX.
     */
    public function filter($lang)
    {
        // Handle the filtering logic for AJAX
        if (request()->has('filter')) {
            // Get tags for the specific service if filter is applied
            $filteredTags = Service::findOrFail(request('filter'))->tags;
        } else {
            // Get all unique tags if no filter is applied
            $filteredTags = Tag::all()->unique('id');
        }

        // Return JSON response for AJAX
        return response()->json([
            'tags' => $filteredTags->map(function ($tag) {
                return [
                    'id' => $tag->id,
                    'name' => $tag->name,
                    'description' => $tag->description,
                    'image' => $tag->image,
                    'link' => $tag->link,
                ];
            }),
            'html' => view('services.partials.tags', [
                'filteredTags' => $filteredTags
            ])->render()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($lang, Service $service)
    {
        $service->delete();
        return redirect()->route('services.index', ['lang' => $lang])->with('success', 'Service deleted successfully.');
    }
}

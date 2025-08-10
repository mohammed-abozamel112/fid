<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($lang)
    {
        $services = Service::latest()->paginate(10);
        return view('services.index', compact('services'));
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
     * Remove the specified resource from storage.
     */
    public function destroy($lang, Service $service)
    {
        $service->delete();
        return redirect()->route('services.index', ['lang' => $lang])->with('success', 'Service deleted successfully.');
    }
}

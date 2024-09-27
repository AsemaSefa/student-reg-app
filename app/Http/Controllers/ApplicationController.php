<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::all();
        return view('applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('applications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicationRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');

            $validatedData['photo'] = $photoPath;
        }

        Application::create($validatedData);

        return redirect()->route('welcome')->with('message', 'application recorded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        return view('applications.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        return view('applications.edit', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicationRequest $request, Application $application)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');

            $validatedData['photo'] = $photoPath;
        }

        $application->update($validatedData);

        return redirect()->back()->with('message', 'application updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->back()->with('message', 'application removed successfully');

    }
}

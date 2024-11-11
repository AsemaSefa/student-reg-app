<?php

namespace App\Http\Controllers;

use App\Models\Application;
use function Termwind\render;
use Illuminate\Support\Facades\Log;

use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::filter(request(['search']))->paginate(20);
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

        if ($request->hasFile('passport')) {
            $passportPath = $request->file('passport')->store('passports', 'public');

            $validatedData['passport'] = $passportPath;
        }

        // Official use fields
        $validatedData['student_id'] = 'nil';
        $validatedData['supervisor'] = 'nil';
        $validatedData['terminal_date'] = ' 2024-10-23 14:27:42';
        $validatedData['designation'] = 'nil';
        $validatedData['ceo_remarks'] = 'nil';

        $application = Application::create($validatedData);
        return redirect()->route('applications.index')->with('message', 'application recorded successfully');
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
        Log::info('Validated Data:', $validatedData);
        if ($request->hasFile('passport')) {
            $passportPath = $request->file('passport')->store('passports', 'public');

            $validatedData['passport'] = $passportPath;
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

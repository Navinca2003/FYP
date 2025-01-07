<?php

namespace App\Http\Controllers;

use App\Models\ResearchGrant;
use App\Models\Academician;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ResearchGrantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Gate check: Only Admin Executive or Staff can view the list
        if (Gate::denies('view-research-grants')) {
            abort(403, 'You do not have permission to view research grants.');
        }

        // Retrieve all research grants
        $researchGrants = ResearchGrant::all();
        return view('researchGrants.index', compact('researchGrants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Gate check: Only Admin Executive can create a research grant
        if (Gate::denies('create-research-grant')) {
            abort(403, 'You do not have permission to create a research grant.');
        }

        // Retrieve the academicians for the dropdown
        $academicians = Academician::all();
        return view('researchGrants.create', compact('academicians'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Gate check: Only Admin Executive can store a research grant
        if (Gate::denies('create-research-grant')) {
            abort(403, 'You do not have permission to create a research grant.');
        }

        // Validate the incoming data
        $validated = $request->validate([
            'project_leader_id' => 'required|exists:academicians,id',
            'grant_amount' => 'required|numeric',
            'grant_provider' => 'required|string',
            'project_title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'duration_months' => 'required|integer',
        ]);

        // Create a new research grant
        $researchGrant = ResearchGrant::create($validated);

        // Find the user related to the project leader and update the user level
        $academician = Academician::find($validated['project_leader_id']);
        $user = $academician->user; // Assuming Academician has a 'user' relation

        if ($user) {
            $user->user_level = 2;  // Update the user level to 2
            $user->save(); // Save the changes
        }

        return redirect()->route('projectMembers.create')->with('success', 'Research grant created successfully and Project Leader updated.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ResearchGrant $researchGrant)
    {
        // Gate check: Admin Executive, Staff, or the Project Leader can view the research grant
        if (Gate::denies('view-research-grant', $researchGrant)) {
            abort(403, 'You do not have permission to view this research grant.');
        }

        return view('researchGrants.show', compact('researchGrant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResearchGrant $researchGrant)
    {
        // Gate check: Only Admin Executive or the Project Leader can edit the research grant
        if (Gate::denies('edit-research-grant', $researchGrant)) {
            abort(403, 'You do not have permission to edit this research grant.');
        }

        // Retrieve the academicians for the dropdown
        $academicians = Academician::all();
        return view('researchGrants.edit', compact('researchGrant', 'academicians'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResearchGrant $researchGrant)
    {
        // Gate check: Only Admin Executive or the Project Leader can update the research grant
        if (Gate::denies('edit-research-grant', $researchGrant)) {
            abort(403, 'You do not have permission to update this research grant.');
        }

        // Validate the incoming data
        $validated = $request->validate([
            'project_leader_id' => 'required|exists:academicians,id',
            'grant_amount' => 'required|numeric',
            'grant_provider' => 'required|string',
            'project_title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'duration_months' => 'required|integer',
        ]);

        // Update the research grant
        $researchGrant->update($validated);

        // Find the user related to the project leader and update the user level
        $academician = Academician::find($validated['project_leader_id']);
        $user = $academician->user; // Assuming Academician has a 'user' relation

        if ($user) {
            $user->user_level = 2;  // Update the user level to 2
            $user->save(); // Save the changes
        }

        return redirect()->route('researchGrants.index')->with('success', 'Research grant updated successfully and Project Leader updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResearchGrant $researchGrant)
    {
        // Gate check: Only Admin Executive can delete a research grant
        if (Gate::denies('delete-research-grant', $researchGrant)) {
            abort(403, 'You do not have permission to delete this research grant.');
        }

        // Delete the research grant
        $researchGrant->delete();

        return redirect()->route('researchGrants.index')->with('success', 'Research grant deleted successfully');
    }
}

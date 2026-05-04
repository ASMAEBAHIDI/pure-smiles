<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function index()
    {
        $specialists = Specialist::orderBy('order')->get();
        return view('admin.specialists.index', compact('specialists'));
    }
    
    public function create()
    {
        return view('admin.specialists.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'specialty' => 'required|string',
            'cost_range' => 'required|string',
            'treatment_time_weeks' => 'required|integer',
            'complexity_percent' => 'required|integer|min:0|max:100',
            'order' => 'integer',
            'is_active' => 'boolean'
        ]);
        
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('specialists', 'public');
        }
        
        Specialist::create($validated);
        
        return redirect()->route('admin.specialists.index')->with('success', 'Specialist created successfully.');
    }
    
    public function edit(Specialist $specialist)
    {
        return view('admin.specialists.edit', compact('specialist'));
    }
    
    public function update(Request $request, Specialist $specialist)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'specialty' => 'required|string',
            'cost_range' => 'required|string',
            'treatment_time_weeks' => 'required|integer',
            'complexity_percent' => 'required|integer|min:0|max:100',
            'order' => 'integer',
            'is_active' => 'boolean'
        ]);
        
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('specialists', 'public');
        }
        
        $specialist->update($validated);
        
        return redirect()->route('admin.specialists.index')->with('success', 'Specialist updated successfully.');
    }
    
    public function destroy(Specialist $specialist)
    {
        $specialist->delete();
        return redirect()->route('admin.specialists.index')->with('success', 'Specialist deleted successfully.');
    }
}
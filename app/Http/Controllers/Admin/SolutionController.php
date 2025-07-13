<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SolutionController extends Controller
{
    public function index()
    {
        $solutions = Solution::orderBy('order')->get();
        return view('admin.solutions.index', compact('solutions'));
    }

    public function create()
    {
        return view('admin.solutions.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:solutions,slug',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image',
            'category' => 'nullable|string|max:255',
            'subcategory' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'active' => 'nullable|boolean',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('solutions', 'public');
        }
        $data['active'] = $request->has('active');
        Solution::create($data);
        return redirect()->route('solutions.admin.solutions.index')->with('success', 'Solution created successfully.');
    }

    public function edit(Solution $solution)
    {
        return view('admin.solutions.edit', compact('solution'));
    }

    public function update(Request $request, Solution $solution)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:solutions,slug,' . $solution->id,
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image',
            'category' => 'nullable|string|max:255',
            'subcategory' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'active' => 'nullable|boolean',
        ]);
        if ($request->hasFile('image')) {
            if ($solution->image) {
                Storage::disk('public')->delete($solution->image);
            }
            $data['image'] = $request->file('image')->store('solutions', 'public');
        }
        $data['active'] = $request->has('active');
        $solution->update($data);
        return redirect()->route('solutions.admin.solutions.index')->with('success', 'Solution updated successfully.');
    }

    public function destroy(Solution $solution)
    {
        if ($solution->image) {
            Storage::disk('public')->delete($solution->image);
        }
        $solution->delete();
        return redirect()->route('solutions.admin.solutions.index')->with('success', 'Solution deleted successfully.');
    }
}

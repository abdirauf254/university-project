<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assignment;

class AssignmentManagementController extends Controller
{
    //
    public function index()
    {
        $assignments = Assignment::latest()->paginate(10);
        return view('admin.assignments.index', compact('assignments'));
    }

    public function create()
    {
        return view('admin.assignments.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'due_date'=>'required|date',
            'file'=>'nullable|mimes:pdf,docx,zip'
        ]);

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('assignments', 'public');
        }

        $data['created_by'] = auth()->id();

        Assignment::create($data);

        return redirect()->route('admin.assignments.index')->with('success','Assignment created');
    }

    public function edit(Assignment $assignment)
    {
        return view('admin.assignments.edit', compact('assignment'));
    }

    public function update(Request $request, Assignment $assignment)
    {
        $data = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'due_date'=>'required|date',
        ]);

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('assignments', 'public');
        }

        $assignment->update($data);

        return back()->with('success','Assignment updated');
    }

    public function destroy(Assignment $assignment)
    {
        $assignment->delete();

        return back()->with('success','Assignment deleted');
    }
}

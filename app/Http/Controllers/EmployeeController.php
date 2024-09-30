<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Employer $employer)
    {
        return view('employees.index', compact('employer'));
    }

    public function store(Request $request, Employer $employer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $employer->employees()->create($data);

        return redirect()->back()->with('success', 'Employee added successfully.');
    }
}

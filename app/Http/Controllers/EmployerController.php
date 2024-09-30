<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::with('employees')->get();
        return view('employers.index', compact('employers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employers,email',
        ]);

        Employer::create($request->all());

        return redirect()->back()->with('success', 'Employer added successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::latest()->get(); 
        return view('properties.index', compact('properties'));
    }

    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('properties.show', compact('property'));
    }

    // public function create()
    // {
    //     return view('properties.create');
    // }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'photo' => 'required|image',
    //         'title' => 'required',
    //         'summary' => 'required',
    //         'price' => 'required|numeric',
    //         'city' => 'required',
    //         'state' => 'required',
    //         'country' => 'required',
    //         'bed_room' => 'required|integer',
    //         'bath_room' => 'required|integer',
    //         'area_l' => 'required|numeric',
    //         'area_w' => 'required|numeric',
    //         'area_total' => 'required|numeric',
    //     ]);

    //     // upload file
    //     $validated['photo'] = $request->file('photo')->store('properties', 'public');

    //     Property::create($validated);

    //     return redirect()->route('properties.index')->with('success', 'Property berhasil ditambahkan!');
    // }
}

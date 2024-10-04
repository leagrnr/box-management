<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Box;

class BoxController extends Controller {
    public function store(Request $request) {
        $request->validate([
        'box_number' => 'required|string|unique:boxes,box_number',
        'status' => 'required|string',
        'tenant_name' => 'nullable|string',
        'surface' => 'required|numeric',
        'price_per_month' => 'required|numeric',
        'location' => 'required|string',
        ]);

        Box::create([
        'box_number' => $request->box_number,
        'status' => $request->status,
        'tenant_name' => $request->status === 'libre' ? null : $request->tenant_name,
        'surface' => $request->surface,
        'price_per_month' => $request->price_per_month,
        'location' => $request->location,
        ]);

        return redirect()->back()->with('success', 'Box added successfully');
    }

    public function index()
    {
        $boxes = Box::all();
        return view('dashboard', compact('boxes'));
    }

    public function destroy(Box $box)
    {
        $box->delete();
        return redirect()->back()->with('success', 'Box deleted successfully');
    }

    public function update(Request $request, Box $box)
    {
        $request->validate([
            'box_number' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'tenant_name' => 'nullable|string|max:255',
            'surface' => 'required|numeric',
            'price_per_month' => 'required|numeric',
            'location' => 'required|string|max:255',
        ]);

        $box->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Box updated successfully');
    }
}

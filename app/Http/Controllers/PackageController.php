<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::orderBy('order')->paginate(10);
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.packages.create_edit');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'package_name' => 'required|string|max:255',
            'regular_price' => 'nullable|string|max:255',
            'offer_price' => 'nullable|string|max:255',
            'bandwith' => 'nullable|string|max:255',
            'feature_1' => 'nullable|string|max:255',
            'feature_2' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'status' => 'required|string|max:255',
        ]);

        Package::create($validatedData);

        return redirect()->route('package.index')->with('success', 'Package created successfully.');
    }

    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.packages.create_edit', compact('package'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'package_name' => 'required|string|max:255',
            'regular_price' => 'nullable|string|max:255',
            'offer_price' => 'nullable|string|max:255',
            'bandwith' => 'nullable|string|max:255',
            'feature_1' => 'nullable|string|max:255',
            'feature_2' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'status' => 'required|string|max:255',
        ]);

        $package = Package::findOrFail($id);
        $package->update($validatedData);

        return redirect()->route('package.index')->with('success', 'Package updated successfully.');
    }

    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        return redirect()->route('package.index')->with('success', 'Package deleted successfully.');
    }
}

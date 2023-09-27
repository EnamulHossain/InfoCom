<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManagementRequest;
use App\Models\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManagementController extends Controller
{
    public function index()
    { 
        $managements = Management::paginate(10);
        return view('admin.management.index', compact('managements'));
    }

    public function create()
    {
        return view('admin.management.create_edit');
    }

    public function store(ManagementRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the 'public' disk
            $image->storeAs('public/image/slider', $name_gen);
    
            $data['image'] = 'image/slider/' . $name_gen;
        }

        Management::create($data);

        return redirect()->route('management.index')->with('success', 'Management member created successfully.');
    }

    // public function show($id)
    // {
    //     $management = Management::findOrFail($id);
    //     return view('managements.show', compact('management'));
    // }

    public function edit($id)
    {
        $management = Management::findOrFail($id);
        return view('admin.management.create_edit', compact('management'));
    }

    public function update(ManagementRequest $request, $id)
    {
        $management = Management::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($management->image) {
                Storage::disk('public')->delete($management->image);
            }

            $imagePath = $request->file('image')->store('management_images', 'public');
            $data['image'] = $imagePath;
        }

        $management->update($data);

        return redirect()->route('management.index')->with('success', 'Management member updated successfully.');
    }

    public function destroy($id)
    {
        $management = Management::findOrFail($id);

        // Delete the image if it exists
        if ($management->image) {
            Storage::disk('public')->delete($management->image);
        }

        $management->delete();

        return redirect()->route('management.index')->with('success', 'Management member deleted successfully.');
    }
}

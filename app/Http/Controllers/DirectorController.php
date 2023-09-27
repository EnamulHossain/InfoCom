<?php

namespace App\Http\Controllers;

use App\Http\Requests\DirectorRequest;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = Director::paginate(10); // Change the number to your desired pagination size
        return view('admin.director.index', compact('directors'));
    }

    public function create()
    {
        return view('admin.director.create_edit');
    }

    public function store(DirectorRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the 'public' disk
            $image->storeAs('public/image/slider', $name_gen);
    
            $data['image'] = 'image/slider/' . $name_gen;
        }

        Director::create($data);

        return redirect()->route('directors.index')->with('success', 'Director created successfully.');
    }

    // public function show($id)
    // {
    //     $director = Director::findOrFail($id);
    //     return view('directors.show', compact('director'));
    // }

    public function edit($id)
    {
        $director = Director::findOrFail($id);
        return view('admin.director.create_edit', compact('director'));
    }

    public function update(DirectorRequest $request, $id)
    {
        $director = Director::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($director->image) {
                Storage:disk('public')->delete($director->image);
            }

            $imagePath = $request->file('image')->store('director_images', 'public');
            $data['image'] = $imagePath;
        }

        $director->update($data);

        return redirect()->route('directors.index')->with('success', 'Director updated successfully.');
    }

    public function destroy($id)
    {
        $director = Director::findOrFail($id);

        // Delete the image if it exists
        if ($director->image) {
            Storage::disk('public')->delete($director->image);
        }

        $director->delete();

        return redirect()->route('directors.index')->with('success', 'Director deleted successfully.');
    }
}

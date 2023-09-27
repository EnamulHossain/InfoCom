<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(10); // Change the number to your desired pagination size
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create_edit');
    }

    
public function store(TeamRequest $request)
{
    $data = $request->validated();
    
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        
        // Store the image in the 'public' disk
        $image->storeAs('public/image/slider', $name_gen);

        $data['image'] = 'image/slider/' . $name_gen;
    }

    Team::create($data);

    return redirect()->route('team.index')->with('success', 'Slider Inserted Successfully');
}

    // public function show($id)
    // {
    //     $team = Team::findOrFail($id);
    //     return view('teams.show', compact('team'));
    // }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.create_edit', compact('team'));
    }

    public function update(TeamRequest $request, $id)
    {
        $team = Team::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team_images', 'public');
            $data['image'] = $imagePath;
        }

        $team->update($data);
        return redirect()->route('team.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Team member deleted successfully.');
    }
}

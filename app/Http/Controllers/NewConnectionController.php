<?php

namespace App\Http\Controllers;

use App\Models\NewConnection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewConnectionController extends Controller
{
    public function index()
    {
        $newConnections = NewConnection::paginate(10); // Change '10' to the number of records per page you desire
        return view('admin.new_connections.index', compact('newConnections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'string|nullable',
            'current_address' => 'required|string',
        ]);

        // Create a new instance of NewConnection
        $newConnection = new NewConnection;

        // Set the attributes
        $newConnection->name = $request->input('name');
        $newConnection->email = $request->input('email');
        $newConnection->phone = $request->input('phone');
        $newConnection->current_address = $request->input('current_address');

        // Optionally, set the user_id if you want
        $newConnection->user_id = auth()->user()->id; // Assumes user is authenticated

        // Save the new connection
        $newConnection->save();

        return redirect()->back()->withErrors($validator);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewConnection  $newConnection
     * @return \Illuminate\Http\Response
     */
    public function show(NewConnection $newConnection)
    {
        // You can implement this method as needed
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewConnection  $newConnection
     * @return \Illuminate\Http\Response
     */
    public function edit(NewConnection $newConnection)
    {
        return view('admin.new_connections.edit', compact('newConnection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewConnection  $newConnection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewConnection $newConnection)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'string|nullable',
            'current_address' => 'required|string',
            'status' => 'required|boolean',
        ]);

        $data = $request->all();
        $newConnection->update($data);

        return redirect()->route('new-connections.index')
            ->with('success', 'New Connection updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewConnection  $newConnection
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewConnection $newConnection)
    {
        $newConnection->delete();

        return redirect()->route('new-connections.index')
            ->with('success', 'New Connection deleted successfully.');
    }
}

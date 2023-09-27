<?php

namespace App\Http\Controllers;

use App\Models\Reconnection;
use Illuminate\Http\Request;

class ReconnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reconnections = Reconnection::latest()->paginate(10); // You can adjust the number of records per page
        return view('admin.reconnection.index', compact('reconnections'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'reason' => 'required|string',
            'customer_id' => 'required|string',
            'previous_address' => 'nullable|string',
            'current_address' => 'nullable|string',
        ]);

        Reconnection::create($request->all());

        return redirect()->back()
            ->with('success', 'Reconnection created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reconnection = Reconnection::find($id);
        return view('admin.reconnection.edit', compact('reconnection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'reason' => 'required|string',
            'customer_id' => 'required|string',
            'previous_address' => 'nullable|string',
            'current_address' => 'nullable|string',
        ]);

        $reconnection = Reconnection::find($id);
        $reconnection->update($request->all());

        return redirect()->route('reconnections.index')
            ->with('success', 'Reconnection updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reconnection = Reconnection::find($id);
        $reconnection->delete();

        return redirect()->route('reconnections.index')
            ->with('success', 'Reconnection deleted successfully.');
    }
}

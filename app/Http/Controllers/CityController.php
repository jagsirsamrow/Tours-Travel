<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = City::select()->orderBy('created_at', 'ASC')->get();
        $title = "City list";
        return view('admin.city.index', compact('list', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new City;
        $title = "Add City";
        return view('admin.city.create', compact('data', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // dd($request);
         $request->validate([
            
            'name' => 'required'
        ]);



        $data = new City();
        // $data->slider_type = $request->slider_type;
        $data->name = $request->name;
        $data->district = $request->district;
        $data->state = $request->state;
        $data->publish = $request->publish;
        // $data->image_link = $request->image_link;
       
        $data->save();
        return redirect()->route('admin.city.index')
                        ->with('success', 'City has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit City";
        $data = City::find($id);
        return view('admin.city.edit', compact('data', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);


            $data = City::find($id);
            $data->name = $request->name;
            $data->district = $request->district;
            $data->state = $request->state;
            

            $data->save();
            return redirect()->route('admin.city.index')->with('success', "City updated successfully");
        } catch (\Exception $e) {
            Log::error("Method: " . __METHOD__ . ", Line " . __LINE__ . ": " . (string) $e);
            return redirect()->back()->with('failed', "Some Problem Occure!!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            City::where('id', $id)->delete();
            return redirect()->route('admin.city.index')->with('success', "City successfully deleted.");
        } catch (\Exception $e) {
            Log::error("Method: " . __METHOD__ . ", Line " . __LINE__ . ": " . (string) $e);
            return redirect()->back()->with('failed', "Some Problem Occure!!!!");
        }
    }
}

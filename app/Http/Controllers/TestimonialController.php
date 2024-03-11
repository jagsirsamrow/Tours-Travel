<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Log;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Testimonial::select()->orderBy('created_at', 'DESC')->get();
        $title = "Testimonial";
        return view('admin.testimonial.index', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Testimonial";
        $data = new Testimonial;
        return view('admin.testimonial.create', compact('data', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'message' => 'required'
        ]);
        
        $data = new Testimonial;
        $data->name = $request->get('name');
        $data->title = $request->get('title');
        // $data->user_type = $request->get('user_type');
        $data->message = $request->get('message');
        $data->publish = 1;
        $data->save();
        // dd("hello");
        return redirect()->route('admin.testimonial.index')
                        ->with('success', 'Testimonial has been created successfully.');
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
        $title = "Edit Testimonial";
        $data = Testimonial::find($id);
        return view('admin.testimonial.edit', compact('data', 'title'));
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
            $data = Testimonial::find($id);
            $data->name = $request->get('name');
            $data->title = $request->get('title');
            // $data->user_type = $request->get('user_type');
            $data->message = $request->get('message');
            $data->save();
            return redirect()->route('admin.testimonial.index')->with('success', "testimonial updated successfully");
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
            Testimonial::where('id', $id)->delete();
            return redirect()->route('admin.testimonial.index')->with('success', "page successfully deleted.");
        } catch (\Exception $e) {
            Log::error("Method: " . __METHOD__ . ", Line " . __LINE__ . ": " . (string) $e);
            return redirect()->back()->with('failed', "Some Problem Occure!!!!");
        }
    }
}

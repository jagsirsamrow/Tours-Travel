<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class BlogCategoryCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = BlogCategory::select()->orderBy('created_at', 'ASC')->get();
        $title = "BlogCategory list";
        return view('admin.blogscat.index', compact('list', 'title'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new BlogCategory;
        $title = "Add BlogCategory";
        return view('admin.blogscat.create', compact('data', 'title'));
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
    $data = new BlogCategory();
    // $data->slider_type = $request->slider_type;
    $data->name = $request->name;
    $data->publish = $request->publish;
    $data->save();
    // $data->image_link = $request->image_link;
    return redirect()->route('admin.blogscat.index')
                        ->with('success', 'BlogCategory has been created successfully.');
    
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit BlogCategory";
        $data = BlogCategory::find($id);
        return view('admin.blogscat.edit', compact('data', 'title'));
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
            $data = BlogCategory::find($id);
            $data->name = $request->name;
            $data->publish = $request->publish;
            $data->save();
            return redirect()->route('admin.blogscat.index')->with('success', "BlogCategory updated successfully");
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
            BlogCategory::where('id', $id)->delete();
            return redirect()->route('admin.blogscat.index')->with('success', "BlogCategory successfully deleted.");
        } catch (\Exception $e) {
            Log::error("Method: " . __METHOD__ . ", Line " . __LINE__ . ": " . (string) $e);
            return redirect()->back()->with('failed', "Some Problem Occure!!!!");
        }
    }
}

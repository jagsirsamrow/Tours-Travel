<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Slider::select()->orderBy('created_at', 'ASC')->get();
        $title = "Sliders list";
        return view('admin.slider.index', compact('list', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new Slider;
        $title = "Add Slider";
        return view('admin.slider.create', compact('data', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'banner' => 'required|image:png',
            's_heading' => 'required',
        ]);



        $data = new Slider();
        // $data->slider_type = $request->slider_type;
        $data->image_alt = $request->image_alt;
        $data->s_heading = $request->s_heading;
        $data->s_content = $request->s_content;
        // $data->image_link = $request->image_link;
        if ($request->hasfile('banner')) {
            $file = $request->file('banner');
            $file_ext = $file->getClientOriginalExtension();
            $newname = "tourandtravel" . rand(1, 1000000) . "." . $file_ext;
            $file = $file->storeAs('slider', $newname);
            // Storage::delete($data->banner);
            $data->banner = $file;
        }
        $data->save();
        return redirect()->route('admin.sliders.index')
                        ->with('success', 'slider has been created successfully.');
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
        $title = "Edit Slider";
        $data = Slider::find($id);
        return view('admin.slider.edit', compact('data', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                's_heading' => 'required',
            ]);


            $data = Slider::find($id);
            // $data->slider_type = $request->slider_type;
            $data->image_alt = $request->image_alt;
            $data->s_heading = $request->s_heading;
            $data->s_content = $request->s_content;
            // $data->image_link = $request->image_link;

            if ($request->hasfile('banner')) {
                $file = $request->file('banner');
                $file_ext = $file->getClientOriginalExtension();
                $newname = "toursandtarvel" . rand(1, 1000000) . "." . $file_ext;
                $file = $file->storeAs('slider', $newname);
                !is_null($data->banner) && Storage::delete($data->banner);

                $data->banner = $file;
            }

            $data->save();
            return redirect()->route('admin.sliders.index')->with('success', "sliders updated successfully");
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
            Slider::where('id', $id)->delete();
            return redirect()->route('admin.sliders.index')->with('success', "sliders successfully deleted.");
        } catch (\Exception $e) {
            Log::error("Method: " . __METHOD__ . ", Line " . __LINE__ . ": " . (string) $e);
            return redirect()->back()->with('failed', "Some Problem Occure!!!!");
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Package::select()->orderBy('created_at', 'ASC')->get();
        $title = "Packages list";
        return view('admin.packages.index', compact('list', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new Package();
        $title = "Add Packages";
        return view('admin.packages.create', compact('data', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            
            'from' => 'required',
            'to' => 'required'
        ]);

        $data = new Package();
        // $data->slider_type = $request->slider_type;
        $data->from = $request->from;
        $data->to = $request->to;
        // $data->model = $request->model;
        $data->distance = $request->distance;
        $data->type = $request->type;
        $data->extra_fare = $request->extra_fare;
        $data->price = $request->price;
        $data->route_plan = $request->route_plan;
        // $data->price = $request->image_link;
        if ($request->hasfile('banner')) {
            $file = $request->file('banner');
            $file_ext = $file->getClientOriginalExtension();
            $newname = "tourandtravel" . rand(1, 1000000) . "." . $file_ext;
            $file = $file->storeAs('packages', $newname);
            // Storage::delete($data->banner);
            $data->banner = $file;
        }
        $data->save();
        return redirect()->route('admin.packages.index')
                        ->with('success', 'Package has been created successfully.');
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
        $title = "Edit Package";
        $data = Package::find($id);
        return view('admin.packages.edit', compact('data', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'from' => 'required',
            ]);


            $data = Package::find($id);
            // $data->slider_type = $request->slider_type;
            $data->from = $request->from;
            $data->to = $request->to;
            // $data->model = $request->model;
            $data->distance = $request->distance;
            $data->type = $request->type;
            $data->extra_fare = $request->extra_fare;
            $data->price = $request->price;
            $data->route_plan = $request->route_plan;
            // $data->image_link = $request->image_link;

            if ($request->hasfile('banner')) {
                $file = $request->file('banner');
                $file_ext = $file->getClientOriginalExtension();
                $newname = "toursandtarvel" . rand(1, 1000000) . "." . $file_ext;
                $file = $file->storeAs('packages', $newname);
                !is_null($data->banner) && Storage::delete($data->banner);
                // Storage::delete($data->banner);
                $data->banner = $file;
            }

            $data->save();
            return redirect()->route('admin.packages.index')->with('success', "packages updated successfully");
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
            Package::where('id', $id)->delete();
            return redirect()->route('admin.packages.index')->with('success', "Packages successfully deleted.");
        } catch (\Exception $e) {
            Log::error("Method: " . __METHOD__ . ", Line " . __LINE__ . ": " . (string) $e);
            return redirect()->back()->with('failed', "Some Problem Occure!!!!");
        }
    }
}

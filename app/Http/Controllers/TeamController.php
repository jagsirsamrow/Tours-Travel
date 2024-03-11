<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Team::select()->orderBy('created_at', 'ASC')->get();
        $title = "Team list";
        return view('admin.team.index', compact('list', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new Team;
        $title = "Add Slider";
        return view('admin.team.create', compact('data', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            
            'post' => 'required'
        ]);



        $data = new Team();
        // $data->slider_type = $request->slider_type;
        $data->name = $request->name;
        $data->post = $request->post;
        $data->phone = $request->number;
        $data->email = $request->email;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        // $data->image_link = $request->image_link;
        if ($request->hasfile('banner')) {
            $file = $request->file('banner');
            $file_ext = $file->getClientOriginalExtension();
            $newname = "tourandtravel" . rand(1, 1000000) . "." . $file_ext;
            $file = $file->storeAs('team', $newname);
            // Storage::delete($data->banner);
            $data->banner = $file;
        }
        $data->save();
        return redirect()->route('admin.team.index')
                        ->with('success', 'Team Mamber has been created successfully.');
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
        $title = "Edit Team Mamber";
        $data = team::find($id);
        return view('admin.team.edit', compact('data', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'post' => 'required',
            ]);


            $data = Team::find($id);
            $data->name = $request->name;
            $data->post = $request->post;
            $data->phone = $request->number;
            $data->email = $request->email;
            $data->facebook = $request->facebook;
            $data->twitter = $request->twitter;
            // $data->image_link = $request->image_link;
            if ($request->hasfile('banner')) {
                $file = $request->file('banner');
                $file_ext = $file->getClientOriginalExtension();
                $newname = "tourandtravel" . rand(1, 1000000) . "." . $file_ext;
                $file = $file->storeAs('team', $newname);
                !is_null($data->banner) && Storage::delete($data->banner);

                $data->banner = $file;
            }

            $data->save();
            return redirect()->route('admin.team.index')->with('success', "Team Mamber updated successfully");
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
            Team::where('id', $id)->delete();
            return redirect()->route('admin.team.index')->with('success', "Team Mamber successfully deleted.");
        } catch (\Exception $e) {
            Log::error("Method: " . __METHOD__ . ", Line " . __LINE__ . ": " . (string) $e);
            return redirect()->back()->with('failed', "Some Problem Occure!!!!");
        }
    }
}

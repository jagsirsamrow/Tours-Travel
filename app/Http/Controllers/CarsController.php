<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Car;
class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $list = Car::select()->orderBy('created_at', 'ASC')->where('cars.name','LIKE',"%$search%")->orwhere('cars.model','LIKE',"%$search%")->paginate(5);

        }
        else{
            $list = Car::select()->orderBy('created_at', 'ASC')->paginate(5);

        }
        $title = "Cars list";
        return view('admin.cars.index', compact('list', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new Car();
        $title = "Add Cars";
        return view('admin.cars.create', compact('data', 'title'));
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



        $data = new Car();
        // $data->slider_type = $request->slider_type;
        $data->name = $request->name;
        $data->type = $request->type;
        $data->model = $request->model;
        $data->passenger = $request->passengers;
        $data->bags = $request->bags;
        $data->extra_fare = $request->extra;
        $data->price = $request->price;
        $data->per_kilo_m = $request->per_kilo_m;
        // $data->price = $request->image_link;
        if ($request->hasfile('banner')) {
            $file = $request->file('banner');
            $file_ext = $file->getClientOriginalExtension();
            $newname = "tourandtravel" . rand(1, 1000000) . "." . $file_ext;
            $file = $file->storeAs('cars', $newname);
            // Storage::delete($data->banner);
            $data->banner = $file;
        }
        $data->save();
        return redirect()->route('admin.cars.index')
                        ->with('success', 'Car has been created successfully.');
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
        $title = "Edit Car Details";
        $data = Car::find($id);
        return view('admin.cars.edit', compact('data', 'title'));
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


            $data = Car::find($id);
            $data->name = $request->name;
            $data->type = $request->type;
            $data->model = $request->model;
            $data->passenger = $request->passengers;
            $data->bags = $request->bags;
            $data->extra_fare = $request->extra;
            $data->price = $request->price;
            $data->per_kilo_m = $request->per_kilo_m;
            // $data->image_link = $request->image_link;
            if ($request->hasfile('banner')) {
                $file = $request->file('banner');
                $file_ext = $file->getClientOriginalExtension();
                $newname = "tourandtravel" . rand(1, 1000000) . "." . $file_ext;
                $file = $file->storeAs('cars', $newname);
                Storage::delete($data->banner);
                $data->banner = $file;
            }

            $data->save();
            return redirect()->route('admin.cars.index')->with('success', "Car Details updated successfully");
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
            Car::where('id', $id)->delete();
            return redirect()->route('admin.cars.index')->with('success', "Car successfully deleted.");
        } catch (\Exception $e) {
            Log::error("Method: " . __METHOD__ . ", Line " . __LINE__ . ": " . (string) $e);
            return redirect()->back()->with('failed', "Some Problem Occure!!!!");
        }
    }
}

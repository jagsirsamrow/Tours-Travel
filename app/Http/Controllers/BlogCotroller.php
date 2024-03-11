<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Log;

class BlogCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $list = Blog::select()->orderBy('created_at', 'ASC')->get();
        $title = "Blog list";
        return view('admin.blogs.index', compact('list', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new Blog;
        $categories = BlogCategory::select('id', 'name')->where('publish', 0)->orderBy('name', 'ASC')->get();

        $title = "Add Blog";
        return view('admin.blogs.create', compact('data', 'title','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'banner' => 'required'
        ]);
        $blog = new Blog;
        $blog->cat_id = $request->get('cat_id');
        // $blog->slug = $request->get('slug');
        $blog->name = $request->get('name');
        $blog->date = date('Y-m-d', strtotime($request->get('date')));
        $blog->short_description = $request->get('short_description');
        $blog->description = $request->get('description');
        // $blog->seo_keywords = $request->get('seo_keywords');
        // $blog->seo_description = $request->get('seo_description');
        // $blog->seo_title = $request->get('seo_title');
        // $blog->show_footer = $request->get('show_footer') ? 1 : 0;
        if ($request->hasfile('banner')) {
            $file = $request->file('banner');
            $file_ext = $file->getClientOriginalExtension();
            $newname = "tourandtravel" . rand(1, 1000000) . "." . $file_ext;
            $file = $file->storeAs('team', $newname);
            // Storage::delete($data->banner);
            $blog->banner = $file;
        }
        // $blog->banner = implode(",", $file);
        $blog->save();
        return redirect()->route('admin.blogs.index')
                        ->with('success', 'Blog has been created successfully.');
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
        $title = "Edit Blog";
        $blog = Blog::find($id);
        $categories = BlogCategory::select('id', 'name')->orderBy('name', 'ASC')->get();
        // $categories->prepend('-Select-', 0);
        return view('admin.blogs.edit', compact('blog', 'title', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'date' => 'required',
                'short_description' => 'required',
                'cat_id' => 'required',
            ]);
            $blog = Blog::find($id);
            $blog->cat_id = $request->get('cat_id');
            // $blog->slug = $request->get('slug');
            $blog->name = $request->get('name');
            // $blog->date = date('Y-m-d', strtotime($request->get('date')));
            $blog->short_description = $request->get('short_description');
            $blog->description = $request->get('description');
            // $blog->seo_keywords = $request->get('seo_keywords');
            // $blog->seo_description = $request->get('seo_description');
            // $blog->seo_title = $request->get('seo_title');
            $blog->show_footer = $request->get('show_footer') ? 1 : 0;
            if ($request->hasfile('banner')) {
                $file = $request->file('banner');
                $file_ext = $file->getClientOriginalExtension();
                $newname = "tourandtravel" . rand(1, 1000000) . "." . $file_ext;
                $file = $file->storeAs('team', $newname);
                Storage::delete($blog->banner);
                $blog->banner = $file;
            }
            $blog->save();
            return redirect()->route('admin.blogs.index')->with('success', "Blog updated successfully");
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
            Blog::where('id', $id)->delete();
            return redirect()->route('admin.blogs.index')->with('success', "Blog successfully deleted.");
        } catch (\Exception $e) {
            Log::error("Method: " . __METHOD__ . ", Line " . __LINE__ . ": " . (string) $e);
            return redirect()->back()->with('failed', "Some Problem Occure!!!!");
        }
    }
}

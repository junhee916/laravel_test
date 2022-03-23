<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function show($id)
    {
        $blog = Blog::with(['comments'])->where('id', $id)->firstOrFail();
        // dd($blog);
        return view('blogs.show', compact('blog'));
    }
    public function create(){
        return view('blogs.create');
    }
    public function index(){
        $blogs = Blog::paginate(1);
        return view('blogs.index', compact('blogs'));
    }

    public function store(Request $request)
    {
        dd($request->url());
        // $blog = new Blog;
        // $blog->user_id = $request->user()->id;
        // $blog->title = $request->title;
        // $blog->description = $request->description;
        // $blog->save();

        Blog::create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'description' => $request->description
        ]);
    }
}

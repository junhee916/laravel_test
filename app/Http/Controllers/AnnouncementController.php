<?php

namespace App\Http\Controllers;

use App\Models\Announcement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AnnouncementController extends Controller
{
    // public function index(){
    //     $announcements = Announcement::paginate(3);
        
    //     return view('home', compact('announcements'));
    // }
    public function show(){
        $announcements = Announcement::paginate(10);
        
        return view('announcement.search', compact('announcements'));
    }
    public function index(){
        $announcement = Announcement::paginate(10);
        return view('pagination', compact('announcement'));
    }
    public function create(){
        return view('announcement.create');
    }

    public function store(Request $request)
    {
        Log::info($request);
        Announcement::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
    }
}

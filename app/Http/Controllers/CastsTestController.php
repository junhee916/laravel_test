<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CastsTest;

class CastsTestController extends Controller
{
    public function index(){
        return view('castsTest');
    }

    public function create(Request $request){
        CastsTest::create([
            'write' => $request->write,
            'name' => $request->name
        ]);
        return redirect()->back();
    }
}

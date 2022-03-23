<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\User;

class BoardController extends Controller
{
    public function index(){
        $boards = Board::all();
        return view('users.index', compact('boards'));
    }

    public function show($user){
        $user_select = User::find($user);
        $board = Board::where('user_id', $user)->first();
        return view('users.update', compact('user_select', 'board'));
    }

    public function deleteView($user){
        $user_select = User::find($user);
        return view('users.delete', compact('user_select'));
    }

    public function create(Request $request){
        Board::create([
            'title' => $request->title,
            'user_id' => $request->user_id
        ]);
        return redirect()->back();
    }

    public function update(Request $request, $board){
        $board_detail = Board::find($board);
        $board_detail->title = $request->title;
        $board_detail->save();
        return redirect()->back();
    }

    public function delete($user){
        $user_detail = User::find($user);
        $user_detail->delete();
        return redirect('board');
    }
}

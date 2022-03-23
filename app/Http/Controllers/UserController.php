<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::paginate(10);
        
        return view('users.index', compact('users'));
    }

    public function checkRole($user){
        $checkUser = User::find($user);

        return view('users.role', compact('checkUser'));
    }

    public function moveConfirm($email){
        $user = User::where('email', $email)->get();
        return view('confirm', compact('user'));
    }

}

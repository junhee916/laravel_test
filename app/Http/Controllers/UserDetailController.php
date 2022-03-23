<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;

class UserDetailController extends Controller
{
    public function show($id)
    {
        $user_detail = UserDetail::find($id)->user;
        dd($user_detail);
        // $user = User::find($id)->userDetail;
        // dd($user);
    }
}

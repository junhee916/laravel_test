<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail($user)
    {
        $user = User::find($user);
        $user_email = $user->email;
        $details = [
            'id' => $user->id,
            'email' => $user->email,
            'title' => 'Mail from Surfside Media',
            'body' => 'This is for testing mail using gmail'
        ];

        Mail::to($user_email)->send(new TestMail($details));
        return "Email Sent";
    }

    public function moveConfirm($id){
        $user = User::find($id);
        return view('confirm', compact('user'));
    }

    public function statusUpdate($email){
        $user = User::where('email', $email)->first();
        $user->status = '1';
        $user->save();
        return redirect('login');
    }
}

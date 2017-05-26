<?php

namespace App\Http\Controllers\Admin;

use App\App\Models\Invite;
use App\Http\Controllers\Controller;
use App\Mail\InviteCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InviteController extends Controller
{


    public function create()
    {
        return view('admin.invite.create');
    }

    public function process(Request $request)
    {
        // generate a unique token
        do {
            $token = str_random();
        }
        while (Invite::where('token', $token)->first());

        $invite = Invite::create([
            'email' => $request->get('email'),
            'token' => $token,
            'invited_by' => Auth::id(),
        ]);

        // send the email
        Mail::to($request->get('email'))->send(new InviteCreated($invite));

        return redirect()->back();
    }


}

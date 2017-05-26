<?php

namespace App\Http\Controllers\Auth;

use App\App\Models\Invite;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class InviteController extends RegisterController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest', 'invited']);
    }


    public function accept($token)
    {
        return view('auth.register', compact('token'));
    }


    public function register(Request $request)
    {
        $token = $request->get('token');
        $invite = Invite::where('token', $token)->first();

        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        $this->guard()->login($user);

        $invite->claimed();

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());

    }


}

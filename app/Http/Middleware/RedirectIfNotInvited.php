<?php

namespace App\Http\Middleware;

use App\App\Models\Invite;
use Closure;

class RedirectIfNotInvited
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(!$token = $request->token){
            return redirect('/home');
        }

        // Look up if the invite exist
        if (!$invite = Invite::where('token', $token)->first()) {
            abort(404, "This token doesn't exist.");
        }

        // Look up if the invite is already accepted
        if($invite->claimed_at){
            abort(404, "You've already claimed this token.");
        }

        return $next($request);
    }
}

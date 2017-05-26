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

        // Look up the invite exist
        if (!$invite = Invite::where('token', $token)->first()) {
            // todo: make an error page
            abort(404);
        }

        // Look up if the invite is already accepted
        if($invite->claimed_at){
            // todo: make an error page
            abort(404);
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
//use App\User;

class CheckIfAdmin
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
        $user = auth()->user();

        if ($user == null) {
            return Redirect(route('login'))->withMessage(['msg'=>'Unauthorized access, Login below.', 'type'=>'error']);
        } else {
            if ( $user->hasAnyRole(['admin', 'moderator']) ) {
                return $next($request);
            }

            return redirect(route('home'));
        }
        
    }
}
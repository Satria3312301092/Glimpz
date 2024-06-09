<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Banned;

class CheckIfBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $isBanned = Banned::where('Id_User', $user->Id_User)->exists();
            
            if ($isBanned) {
                Auth::logout();
                return redirect('/login')->withErrors(['error' => 'Your account Has Been Banned Please Contact Us.']);
            }
        }

        return $next($request);
    }
}



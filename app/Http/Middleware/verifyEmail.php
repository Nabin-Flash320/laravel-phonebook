<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class verifyEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){

        $is_verified = Auth::user()->is_verified;
        if($is_verified !== 1){
            return redirect()->back()->with('verificationError', 'The user needs to be verified to perform this action!');
        }
        return $next($request);
    }
}

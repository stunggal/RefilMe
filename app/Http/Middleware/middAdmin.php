<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class middAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest()) {
            return redirect()->route('login')->with('success', 'Anda harus login terlebih dahulu!');
        } else {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return $next($request);
            }
            return redirect()->route('dash')->with('success', 'Anda tidak memiliki akses!');
        }
        return redirect()->route('dash')->with('success', 'Anda tidak memiliki akses!');
    }
}

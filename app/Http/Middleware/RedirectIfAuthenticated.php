<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
		if (Auth::guard('dinas')->check()) {
			return redirect('/dinas');
		} else if (Auth::guard('bpbd')->check()) {
			return redirect('/bpbd');
		} else if (Auth::guard('masyarakat')->check()) {
			return redirect('/dashboard');
		}

		return $next($request);

	}
}

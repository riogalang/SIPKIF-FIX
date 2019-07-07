<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Controller;


class LoginController extends Controller
{
	public function showLogin()
	{
		return view('auth.login');
	}

	function login(Request $request)
	{
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Dinas'])) {
			$dinas = User::where('email', $request->email)->get();

			Auth::guard('dinas')->LoginUsingId($dinas[0]['id']);
				// return $role;
			return redirect('/dinas');
		} else if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'BPBD'])) {
			$dinas = User::where('email', $request->email)->get();
			Auth::guard('bpbd')->LoginUsingId($dinas[0]['id']);
			return redirect('/bpbd');
		} else if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Masyarakat'])) {
			$dinas = User::where('email', $request->email)->get();
			Auth::guard('masyarakat')->LoginUsingId($dinas[0]['id']);
			return redirect('/dashboard');
		} else {
			return redirect()->back();
		}
	}

	function logout()
	{
		if (Auth::guard('dinas')->check()) {
			Auth::guard('dinas')->logout(); //Jika berhasil coba hanya gunakan Auth::logout() saja
			// Auth::logout();
		} else if (Auth::guard('bpbd')->check()) {
			Auth::guard('bpbd')->logout();
			// Auth::logout();
		} else if (Auth::guard('masyarakat')->check()) {
			Auth::guard('masyarakat')->logout();
			// Auth::logout();
		}
		// Alert::success('Terima Kasih atas kerja keras Anda hari ini', 'Berhasil Keluar');
		return redirect('/akun/login');
	}

	function logEx()
	{
		Auth::logout();
		return redirect('/');
	}


   //  /*
   //  |--------------------------------------------------------------------------
   //  | Login Controller
   //  |--------------------------------------------------------------------------
   //  |
   //  | This controller handles authenticating users for the application and
   //  | redirecting them to your home screen. The controller uses a trait
   //  | to conveniently provide its functionality to your applications.
   //  |
   //  */

	// use AuthenticatesUsers;

	// /**
	//  * Where to redirect users after login.
	//  *
	//  * @var string
	//  */
	// protected $redirectTo = '/dashboard';

	// /**
	//  * Create a new controller instance.
	//  *
	//  * @return void
	//  */
	// public function __construct()
	// {
	// 	$this->middleware('guest')->except('logout');
	// }
}

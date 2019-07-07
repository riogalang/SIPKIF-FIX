<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProfilController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		return view('profiles.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return view('profiles.edit')->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$user = User::find($id);
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required',
			// 'foto' => 'image|mimes:jpg, png, jpeg|max 2048',
			'notelpon' => 'required',
			'pekerjaan' => 'required',
			'alamat' => 'required',
		]);
		$imageName = $request->file('foto');
		if ($imageName!=null) {
			$extension = $imageName->getClientOriginalExtension();
			request()->foto->move(public_path('images'), $imageName->getClientOriginalName());
			$user->mime = $imageName->getClientMimeType();
			$user->original = $imageName->getClientOriginalName();
		}

		$user->name = $request->input('name');
		$user->email = $request->input('email');
		// $user->password = $request->input('password');
		$user->notelpon = $request->input('notelpon');
		$user->alamat = $request->input('alamat');
		$user->pekerjaan = $request->input('pekerjaan');
		$user->id = auth()->user()->id;
		$user->save();

		return redirect('/dashboard')->with('success', 'Laporan Berhasil Diubah');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}

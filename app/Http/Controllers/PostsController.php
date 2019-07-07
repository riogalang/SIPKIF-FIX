<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\File;
use File;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Image;

class PostsController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('guest');
	// }
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		// $posts = Post::orderBy('created_at', 'desc')->paginate(6);
		$user_id = auth()->user()->id;
		$user = User::find($user_id);

		return view('posts.index')->with('posts', $user->posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			// 'upload' => 'required|image|mimes:jpeg, png, jpg, mp4, gif, svg',
			'lokasi' => 'required',
			'cover-image'=> 'image|nullable|max:1999',
			'keterangan'
		]);

		if($request->hasFile('cover_image')){
				$filenameWithExt = $request->file('cover_image')->getClientOriginalName();
				$filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
				$extension = $request->file('cover_image')->getClientOriginalExtension();
				$fileNameToStore= $filename.'_'.time().'_'.$extension;
				$path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
		}  else{
			$fileNameToStore = 'noimage.jpg';
		}
		


		//Create post
		$post = new Post;
		$post->nama = $request->input('nama');
		$post->nik = $request->input('nik');
		$post->notelponn = $request->input('notelponn');
		$post->kota = $request->input('kota');
		$post->jumlahBangunan = $request->input('jumlahBangunan');
		$post->jumlahInfrastruktur = count($request->infrastruktur1);
		$post->infrastruktur1 = implode(",",$request->infrastruktur1);
		$post->email = $request->input('email');
		$post->lokasi = $request->input('lokasi');
		$post->keterangan = $request->input('keterangan');
		$post->cover_image = $fileNameToStore;
		$post->status = $request->input('status');
	
		
		$post->save();
		return redirect('/')->with('success', 'Laporan Berhasil Dibuat');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return view('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return view('posts.edit')->with('post', $post);
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

		if($request->hasFile('cover_image')){
			$filenameWithExt = $request->file('cover_image')->getClientOriginalName();
			$filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
			$extension = $request->file('cover_image')->getClientOriginalExtension();
			$fileNameToStore= $filename.'_'.time().'_'.$extension;
			$path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
	}  else{
		$fileNameToStore = 'noimage.jpg';
	}

		$post = Post::find($id);

		$post->nama = $request->input('nama');
		$post->nik = $request->input('nik');
		$post->notelponn = $request->input('notelponn');
		$post->kota = $request->input('kota');
		$post->jumlahBangunan = $request->input('jumlahBangunan');
		$post->email = $request->input('email');
		$post->lokasi = $request->input('lokasi');
		$post->keterangan = $request->input('keterangan');
		$post->cover_image = $fileNameToStore;
		$jumlahBangunan = $post->jumlahBangunan;
      $jumlahInfrastruktur = $post->jumlahInfrastruktur;
          
            $jBr = (5-$jumlahBangunan)/(5-1); //jumlah bangunan sedikit
            $jBt = ($jumlahBangunan-3)/(15-3); // jumlah bangunan tinggi
            $jIb = (5-$jumlahInfrastruktur)/(5-1); //jumlah infrastruktur sedikit
            $jIs = ($jumlahInfrastruktur-3)/(10-2); //item banyak

            //ATURAN 1 IF umlah bangunan tinggi and jumlah infrastruktur then rekomendasi relawan banyak

            //miu jumlah bangunan tinggi
            if($jumlahBangunan>3 && $jumlahBangunan<15){
              $UjumlahBangunan1 = $jBt; 
            }
            else if($jumlahBangunan<=3){
              $UjumlahBangunan1 = 0;
            }
            else{
              $UjumlahBangunan1=1;
            }
            //miu nilai jumlah infrastruktur banyak 
            if($jumlahInfrastruktur>2 && $jumlahInfrastruktur<10){
              $UjumlahInfrastruktur1 = $jIb;
            }
            else if( $jumlahInfrastruktur<=2){
              $UjumlahInfrastruktur1 = 0;
            }
            else{
              $UjumlahInfrastruktur1 = 1;
            }

            if($UjumlahBangunan1<$UjumlahInfrastruktur1){
              $a1 = $UjumlahBangunan1;
            }
            else{
              $a1=$UjumlahInfrastruktur1;
            }

            $z1=($a1*35)+15;

            //ATURAN 2 IF jumlah bangunan TINGGI and jenis infrastruktur sedikit then rekomendasi relawan banyak

            //mui jumlah bangunan TINGGI
            if($jumlahBangunan>3 && $jumlahBangunan<15){
              $UjumlahBangunan2 = $jBt;
            }
            else if($jumlahBangunan<=3){
              $UjumlahBangunan2 = 0;
            }
            else{
              $UjumlahBangunan2 = 1;
            }
            //mui jumlah infrastruktur sedikit
            if($jumlahInfrastruktur>1 && $jumlahInfrastruktur<5){
              $UjumlahInfrastruktur2 = $jIs;
            }
            else if($jumlahInfrastruktur<1){
              $UjumlahInfrastruktur2 = 1;
            }
            else{
              $UjumlahInfrastruktur2 = 0;
            }

            if($UjumlahBangunan2<$UjumlahInfrastruktur2){
              $a2 = $UjumlahBangunan2;
            }
            else{
              $a2=$UjumlahInfrastruktur2;
            }
            $z2=($a2*35)+15;


           //ATURAN 3 IF jumlah bangunan sedikit and jumlah infrastruktur banyak then rekomendasi tinggi
           
           //mui jumlah bangunan sedikit
            if($jumlahBangunan>1 && $jumlahBangunan<5){
              $UjumlahBangunan3 = $jBr;
            }
            else if($jumlahBangunan <=1){
              $UjumlahBangunan3 = 1;
            }
            else{
              $UjumlahBangunan3=0;
            }

            //mui jumlah infrastruktur banyak
            if($jumlahInfrastruktur>2 && $jumlahInfrastruktur<10){
              $UjumlahInfrastruktur3= $jIb;
            }
            else if($jumlahInfrastruktur<2){
              $UjumlahInfrastruktur3=0;
            }
            else{
              $UjumlahInfrastruktur3=1;
            }


            if($UjumlahBangunan3<$UjumlahInfrastruktur3){
              $a3 = $UjumlahBangunan3;
            }
            else{
              $a3=$UjumlahInfrastruktur3;
            }
            $z3=($a3*35)+15;

            //ATURAN 4 IF jumlah bangunan rendah and jumlah infrastruktur sedikit then relawan rendah

            //mui jumlah bangunan rendah
            if($jumlahBangunan>1 && $jumlahBangunan<5){
              $UjumlahBangunan4=$jBr;
            }
            else if($jumlahBangunan<=1){
              $UjumlahBangunan4=1;
            }
            else{
              $UjumlahBangunan4=0;
            }

				//mui jumlah infrastruktur sedikit

            if($jumlahInfrastruktur>1 && $jumlahInfrastruktur<5){
              $UjumlahInfrastruktur4=$jIs;
            }
            else if($jumlahInfrastruktur<=1){
              $UjumlahInfrastruktur4=1;
            }
            else{
              $UjumlahInfrastruktur4=0;
            }

				if($UjumlahBangunan4<$UjumlahInfrastruktur4){
					$a4 = $UjumlahBangunan4;
				 }
				 else{
					$a4=$UjumlahInfrastruktur4;
				 }
				 $z4=20-($a4*15);

				 $Ztotal = (($a1*$z1)+($a2*$z2)+($a3*$z3)+($a4*$z4))/($a1+$a2+$a3+$a4);

				 $post->Ztotal=$Ztotal;
				
				

        
        $post->save();
		  return redirect('/dashboard')->with('Ztotal',$Ztotal);


        
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 * 
	 * 
	 * 
	 * 
	 */

	public function tsukamoto($request,$id){



		$post = Post::find($id);


	}
	
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();

		return redirect('/dashboard')->with('success', 'Laporan Berhasil Dihapus');
	}
}

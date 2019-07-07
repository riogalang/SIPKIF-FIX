<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index()
   {
      $title = 'Selamat Datang di SIPKIF';
      return view('pages.index')->with('title', $title);
   }

   public function about()
   {
      $title = 'Tentang Kami';
      return view('pages.about')->with('title', $title);
   }

   public function contacts()
   {
      $data = array(
         'title' => 'Kontak',
         'contacts' => [
            'Dio Agus Nofrizal' => '17523110@students.uii.ac.id',
            'Dwiko Nugroho Dani' => '17523115@students.uii.ac.id',
            'Rio Galang Jati Respati' => '17523118@students.uii.ac.id',
            'Umar Abdul Aziz Al-Faruq' => '17523215@students.uii.ac.id'
         ]
      );
      return view('pages.contacts')->with($data);
   }
}

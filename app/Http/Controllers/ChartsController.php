<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Charts;
use DB;

class ChartsController extends Controller
{
    public function index()
    {

    
    $chart = Charts::database(Post::all(),'pie','highcharts')
            ->title("Lokasi Sering Terjadinya Infrastruktur Rusak")
            ->elementLabel("Kota")
            ->dimensions(1000,500)
            ->responsive(false)
            ->groupBy('kota');
            return view('charts',compact('chart'));

    
    $pien = Charts::database(Post::all(),'pie','highcharts')
            ->title("Lokasi Sering Terjadinya Infrastruktur Rusak")
            ->elementLabel("Infrastruktur")
            ->dimensions(1000,500)
            ->responsive(false)
            ->groupBy('infrastruktur1');
            return view('chartInfra',compact('pien'));

    }

}

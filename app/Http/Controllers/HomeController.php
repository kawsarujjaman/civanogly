<?php

namespace App\Http\Controllers;

use App\Models\location;
use App\Models\property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $latest_properties = property::latest()->get()->take(4);
        $locations= location::select(['id', 'name'])->get();
      
        // dd($latest_properties);

        return view('welcome', [
            'latest_properties'=> $latest_properties,
            'locations'=> $locations
    
    ]);

    }
}

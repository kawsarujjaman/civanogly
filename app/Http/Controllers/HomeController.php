<?php

namespace App\Http\Controllers;

use App\Models\location;
use App\Models\property;
use App\Models\page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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

    public function single($slug) {
        $page = page::where('slug', $slug)->first();

        if(!empty($page)) {
            return view('page', ['page' => $page ]);
            
        }else{
            return abort('404');
        }
    }
    public function currencyChange($code){
        Cookie::queue('currency', $code, 3600);

        return back();
    }

}

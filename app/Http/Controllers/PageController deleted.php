<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;

class PageController extends Controller
{
    
    public function single($slug) {
        $page = page::where('slug', $slug)->first();

        if(!empty($page)) {
            return view('page', ['page' => $page ]);
            
        }else{
            return abort('404');
        }
    }

}

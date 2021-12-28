<?php

namespace App\Http\Controllers;

use App\Models\location;
use App\Models\property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // public function single($id)
    // {
    //     $property = Property::findOrFail($id);

    //     return view('property.single')->with('property',$property);
    // }

    
    public function single_property($id){
        $property = Property::findOrFail($id);

        return view('property.single', [
            'property'=> $property
    
    ]);

    }

    public function index(Request $request) {

        $latest_properties= property::latest();
        $locations= location::select(['id', 'name'])->get();

        if(!empty($request->location)){
            $latest_properties=$latest_properties->where('location_id', $request->location);
        }
        if(!empty($request->type)){
            $latest_properties=$latest_properties->where('type', $request->type);
        }

        if(!empty($request->sale)){
            $latest_properties=$latest_properties->where('sale', $request->sale);
        } 
        if(!empty($request->bedrooms)){
            $latest_properties=$latest_properties->where('bedrooms', $request->bedrooms);
        }

        if(!empty($request->property_name)){
            $latest_properties=$latest_properties->where('name' , 'LIKE', '%'. $request->property_name . '%');
        }

         if(!empty($request->price)){
           // $latest_properties=$latest_properties->where('price', $request->price);
           if($request->price == '500000'){
               $latest_properties= $latest_properties->where('price', '>', 400000)->where('price', '<=', 500000);
           }
           if($request->price == '400000'){
            $latest_properties= $latest_properties->where('price', '>', 300000)->where('price', '<=', 400000);
        }
        if($request->price == '300000'){
            $latest_properties= $latest_properties->where('price', '>', 200000)->where('price', '<=', 300000);
        }
        if($request->price == '200000'){
            $latest_properties= $latest_properties->where('price', '>', 100000)->where('price', '<=', 200000);
        }
        if($request->price == '100000'){
            $latest_properties= $latest_properties->where('price', '>', 0)->where('price', '<=', 100000);
        }
        if($request->price == '600000'){
            $latest_properties= $latest_properties->where('price', '>', 500000);
        }
        }
        $latest_properties=$latest_properties->paginate(12);
       
        return view('property.index', ['latest_properties' => $latest_properties, 'locations'=> $locations]);

       

    }

    
}

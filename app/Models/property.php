<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class property extends Model
{
    use HasFactory;

    // public function featured(){
    //     $this->belongsTo(Media::class, 'feature_media_id');
    // }

    public function location(){
       return $this->belongsTo(location::class, 'location_id');
    }
    public function gallery(){
      return  $this->hasMany(Media::class, 'property_id');
    }

      public function dynamic_pricing($lira){
        $current_currency = Cookie::get('currency' , 'tl');

          if($current_currency=='usd'){

          $get = Http::get('https://freecurrencyapi.net/api/v2/latest?apikey=7c475de0-6cbd-11ec-898e-23d292dadbd3&base_currency=TRY');

          if($get->successful()){

            $usd = intval($lira * $get->json()['data']['USD']);
            return $usd .' USD ';
          }
        }else{
            return $lira. ' TL ';
        }
      }

}

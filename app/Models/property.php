<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

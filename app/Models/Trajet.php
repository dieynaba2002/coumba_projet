<?php

namespace App\Models;
use App\Models\Region;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomTrajet',
        'tarif',
        'region_id'
    ];
   public function region(){
    return $this->belongsTo(Region::class);
   }
   
}


   

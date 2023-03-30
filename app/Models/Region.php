<?php

namespace App\Models;
use App\Models\Trajet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomRegion'
    ];

public function trajets(){
    return $this->hasMany(Trajet::class);

}

}





   


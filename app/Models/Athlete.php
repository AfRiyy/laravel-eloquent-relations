<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;
    //ez jó!
    public function cities()
    {
        return $this->hasManyThrough(City::class,Club::class,'id','id');
    }
    //ez jó!
    public function clubs()
    {
        return $this->belongsTo(Club::class,'id');
    }
}

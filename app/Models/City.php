<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    //ez jó!
    public function athletes()
    {
        return $this->hasManyThrough(Athlete::class,Club::class);
    }
    //ez jó!
    public function clubs()
    {
        return $this->hasMany(Club::class);
    }
    //ez jó!
    public function sports()
    {
        return $this->belongsToMany(Sport::class);
    }
}

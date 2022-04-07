<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    //ez jó!
    public function cities()
    {
        return $this->belongsTo(City::class,'id');
    }
    //ez jó!
    public function athletes()
    {
        return $this->hasMany(Athlete::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;
    //ez jó!
    public function cities()
    {
        return $this->belongsToMany(City::class);
    }
}

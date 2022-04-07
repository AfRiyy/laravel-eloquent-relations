<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Sport;
class CityController extends Controller
{
    public function clubs()
    {
        $cities = Athlete::find(1)->sports;
        return $cities;
    }
}

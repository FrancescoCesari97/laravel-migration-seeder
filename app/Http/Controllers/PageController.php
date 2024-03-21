<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Train;

class PageController extends Controller
{
    function index()
    {
        $trains = Train::whereDate('departure_time', today()->toDateString())->get();

        return view('home', compact('trains'));
    }
}

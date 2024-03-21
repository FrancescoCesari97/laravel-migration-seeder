<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Train;

class PageController extends Controller
{
    function index()
    {
        $trains = Train::whereDate('departure_time', today()->toDateString())->paginate();

        return view('home', compact('trains'));
    }
}

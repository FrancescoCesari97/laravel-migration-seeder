<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Train;

class PageController extends Controller
{
    function index()
    {
        $trains = Train::all();

        return view('home', compact('trains'));
    }
}

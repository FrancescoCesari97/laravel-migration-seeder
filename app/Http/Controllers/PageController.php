<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Train;

class PageController extends Controller
{
    function index()
    {
        dd(Train::all());

        return view('home');
    }
}

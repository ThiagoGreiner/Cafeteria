<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coffee;

class CoffeeController extends Controller
{
    public function index()
    {
        $coffees = Coffee::all()->groupBy('category');

        return view('coffee.index', compact('coffees'));
    }
}

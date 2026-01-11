<?php
// Controller da resources\views\home

namespace App\Http\Controllers;

use App\Models\coffee;

class HomeController extends Controller
{
    public function index()
{
    $coffees = Coffee::all()->groupBy('category');

    return view('home', compact('coffees'));
}
}

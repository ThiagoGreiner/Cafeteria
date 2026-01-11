<?php
// Controller da resources\views\admin\coffees\

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoffeeController extends Controller
{
    public function index()
    {
        $coffees = Coffee::all();
        return view('admin.coffees.index', compact('coffees'));
    }

    public function create()
    {
        return view('admin.coffees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'price'    => 'required|numeric',
            'category' => 'required|string',
            'image'    => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload da imagem
        $path = $request->file('image')->store('coffees', 'public');

        Coffee::create([
            'name'     => $request->name,
            'price'    => $request->price,
            'category' => $request->category,
            'image'    => $path,
        ]);

        return redirect()
            ->route('admin.coffees.index')
            ->with('success', 'Café cadastrado com sucesso!');
    }

    public function edit(Coffee $coffee)
    {
        return view('admin.coffees.edit', compact('coffee'));
    }

}

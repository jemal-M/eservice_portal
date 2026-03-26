<?php

namespace App\Http\Controllers;

use App\Models\Subcity;
use Illuminate\Http\Request;

class SubcityController extends Controller
{
    public function index()
    {
        return Subcity::all();
    }

    public function show(Subcity $subcity)
    {
        return $subcity;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $subcity = Subcity::create($request->all());

        return response()->json($subcity, 201);
    }

    public function update(Request $request, Subcity $subcity)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $subcity->update($request->all());

        return response()->json($subcity, 200);
    }

    public function delete(Subcity $subcity)
    {
        $subcity->delete();

        return response()->json(null, 204);
    }
    
}

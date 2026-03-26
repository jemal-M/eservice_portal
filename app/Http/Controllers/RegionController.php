<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        return Region::all();
    }

    public function show(Region $region)
    {
        return $region;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $region = Region::create($request->all());

        return response()->json($region, 201);
    }

    public function update(Request $request, Region $region)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $region->update($request->all());

        return response()->json($region, 200);
    }

    public function delete(Region $region)
    {
        $region->delete();

        return response()->json(null, 204);
    }
    
}

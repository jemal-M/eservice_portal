<?php

namespace App\Http\Controllers;

use App\Models\Woreda;
use Illuminate\Http\Request;

class WoredaController extends Controller
{
    public function index()
    {
        return Woreda::all();
    }

    public function show(Woreda $woreda)
    {
        return $woreda;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'zone_id' => 'required|exists:zones,id'
        ]);
        $woreda = Woreda::create($request->all());

        return response()->json($woreda, 201);
    }

    public function update(Request $request, Woreda $woreda)
    {
        $request->validate([
            'name' => 'string|max:255',
            'zone_id' => 'exists:zones,id'
        ]);
        $woreda->update($request->all());

        return response()->json($woreda, 200);
    }

    public function delete(Woreda $woreda)
    {
        $woreda->delete();

        return response()->json(null, 204);
    }

    public function woredasByZone($zoneId)
    {
        return Woreda::where('zone_id', $zoneId)->get();
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function index()
    {
        return Zone::all();
    }

    public function show(Zone $zone)
    {
        return $zone;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'region_id'=>'required'
        ]);
        $zone = Zone::create($request->all());

        return response()->json($zone, 201);
    }

    public function update(Request $request, Zone $zone)
    {
        $request->validate([
            'name' => 'string|max:255',
            'region_id'=>'required'
        ]);
        $zone->update($request->all());

        return response()->json($zone, 200);
    }

    public function delete(Zone $zone)
    {
        $zone->delete();

        return response()->json(null, 200);
    }

    public function getZoneByRegion($region_id)
    {
        return Zone::where('region_id',$region_id)->get();
    }

    public function getZoneByName($name)
    {
        return Zone::where('name', $name)->first();
    }
}

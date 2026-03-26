<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index()
    {
        return Office::all();
    }

    public function show(Office $office)
    {
        return $office;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'region_id'=>"required",
            'zone'=>'required',
            'subcity_id'=>"required",
            'woreda_id'=>"required",
            'kebele_id'=>"required",

        ]);
        $office = Office::create($request->all());

        return response()->json($office, 201);
    }

    public function update(Request $request, Office $office)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'region_id'=>"required",
            'zone'=>'required',
            'subcity_id'=>"required",
            'woreda_id'=>"required",
            'kebele_id'=>"required",
        ]);

        $office->update($request->all());

        return response()->json($office, 200);
    }

    public function delete(Office $office)
    {
        $office->delete();

        return response()->json(null, 204);
    }

    public function getOfficesByRegion($region_id){
        return Office::where('region_id',$region_id)->get();
    }

    public function getOfficesByZone($zone){
        return Office::where('zone', $zone)->get();
    }

    public function getOfficesBySubcity($subcity_id){
        return Office::where('subcity_id', $subcity_id)->get();
    }

    public function getOfficesByWoreda($woreda_id){
        return Office::where('woreda_id', $woreda_id)->get();
    }

    public function getOfficesByKebele($kebele_id){
        return Office::where('kebele_id', $kebele_id)->get();
    }

    public function search($name){
        return Office::where('name', 'like', '%'.$name.'%')->get();
    }

    public function officeList(){
        $offices=Office::all();
        return view('officelist')->with('offices',$offices);
    }
}

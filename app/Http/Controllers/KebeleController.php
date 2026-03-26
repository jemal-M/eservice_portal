<?php

namespace App\Http\Controllers;

use App\Models\Kebele;
use Illuminate\Http\Request;

class KebeleController extends Controller
{
    public function index()
    {
        return Kebele::all();
    }
    public function show($id){
         return Kebele::find($id);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city_id' => 'required',
            'subcity_id'=>'required'
        ]);
        $kebele = Kebele::create($request->all());

        return response()->json($kebele, 201);
    }
    public function update(Request $request, $id)
    {
        $kebele = Kebele::findOrFail($id);
        $kebele->update($request->all());

        return response()->json($kebele, 200);
    }
    public function delete($id)
    {
        $kebele = Kebele::findOrFail($id);
        $kebele->delete();

        return response()->json(null, 204);
    }
}

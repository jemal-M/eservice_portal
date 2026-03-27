<?php

namespace App\Http\Controllers;

use App\Models\ServiceStep;
use Illuminate\Http\Request;

class ServiceStepController extends Controller
{
     public function index()
    {
        return ServiceStep::all();
    }

    public function show(ServiceStep $serviceStep)
    {
        return $serviceStep;
    }

    public function store(Request $request)
    {
        $serviceStep = ServiceStep::create($request->all());

        return response()->json($serviceStep, 201);
    }

    public function update(Request $request, ServiceStep $serviceStep)
    {
        $serviceStep->update($request->all());

        return response()->json($serviceStep, 200);
    }

    public function delete(ServiceStep $serviceStep)
    {
        $serviceStep->delete();

        return response()->json(null, 204);
    }
    
}

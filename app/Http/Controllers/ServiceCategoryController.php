<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index(){
        return ServiceCategory::all();
    }

    public function show(ServiceCategory $serviceCategory){
        return $serviceCategory;
    }

    public function store(Request $request){
        $serviceCategory = ServiceCategory::create($request->all());
        return response()->json($serviceCategory, 201);
    }

    public function update(Request $request, ServiceCategory $serviceCategory){
        $serviceCategory->update($request->all());
        return response()->json($serviceCategory, 200);
    }

    public function delete(ServiceCategory $serviceCategory){
        $serviceCategory->delete();
        return response()->json(null, 204);
    }
    
}

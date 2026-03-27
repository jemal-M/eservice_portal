<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    public function index()
    {
        return ServiceRequest::all();
    }

    public function store(Request $request)
    {
        $serviceRequest = new ServiceRequest();
        $serviceRequest->user_id = $request->user_id;
        $serviceRequest->service_id = $request->service_id;
        $serviceRequest->status = $request->status;
        $serviceRequest->region_id = $request->region_id;
        $serviceRequest->woreda_id = $request->woreda_id;
        $serviceRequest->kebele_id = $request->kebele_id;
        $serviceRequest->save();

        return response()->json($serviceRequest);
    }

    public function show($id)
    {
        $serviceRequest = ServiceRequest::find($id);
        
        if (!$serviceRequest) {
            return response()->json(['error' => 'Service request not found'], 404);
        }
        
        return response()->json($serviceRequest);
    }

    public function update(Request $request, $id)
    {
        $serviceRequest = ServiceRequest::find($id);
        
        if (!$serviceRequest) {
            return response()->json(['error' => 'Service request not found'], 404);
        }
        
        $serviceRequest->user_id = $request->user_id;
        $serviceRequest->service_id = $request->service_id;
        $serviceRequest->status = $request->status;
        $serviceRequest->region_id = $request->region_id;
        $serviceRequest->woreda_id = $request->woreda_id;
        $serviceRequest->kebele_id = $request->kebele_id;
        $serviceRequest->save();

        return response()->json($serviceRequest);
    }

    public function delete($id)
    {
        $serviceRequest = ServiceRequest::find($id);
        
        if (!$serviceRequest) {
            return response()->json(['error' => 'Service request not found'], 404);
        }
        
        $serviceRequest->delete();

        return response()->json('Service request deleted!');
    }
}

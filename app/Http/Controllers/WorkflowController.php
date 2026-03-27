<?php

namespace App\Http\Controllers;

use App\Models\Workflow;
use Illuminate\Http\Request;

class WorkflowController extends Controller
{
    public function index()
    {
        return Workflow::all();
    }

    public function show(Workflow $workflow)
    {
        return $workflow;
    }

    public function store(Request $request)
    {
        $workflow = Workflow::create($request->all());

        return response()->json($workflow, 201);
    }

    public function update(Request $request, Workflow $workflow)
    {
        $workflow->update($request->all());

        return response()->json($workflow, 200);
    }

    public function delete(Workflow $workflow)
    {
        $workflow->delete();

        return response()->json(null, 204);
    }
    
}

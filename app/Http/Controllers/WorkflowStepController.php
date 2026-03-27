<?php

namespace App\Http\Controllers;

use App\Models\WorkflowStep;
use Illuminate\Http\Request;

class WorkflowStepController extends Controller
{
    public function index()
    {
        return WorkflowStep::all();
    }

    public function show(WorkflowStep $workflowStep)
    {
        return $workflowStep;
    }

    public function store(Request $request)
    {
        $workflowStep = WorkflowStep::create($request->all());

        return response()->json($workflowStep, 201);
    }

    public function update(Request $request, WorkflowStep $workflowStep)
    {
        $workflowStep->update($request->all());

        return response()->json($workflowStep, 200);
    }

    public function delete(WorkflowStep $workflowStep)
    {
        $workflowStep->delete();

        return response()->json(null, 204);
    }
}

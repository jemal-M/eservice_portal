<?php

namespace App\Http\Controllers;

use App\Models\WorkflowAction;
use Illuminate\Http\Request;

class WorkflowActionController extends Controller
{
    public function index()
    {
        return WorkflowAction::all();
    }

    public function show(WorkflowAction $workflowAction)
    {
        return $workflowAction;
    }

    public function store(Request $request)
    {
        $workflowAction = WorkflowAction::create($request->all());

        return response()->json($workflowAction, 201);
    }

    public function update(Request $request, WorkflowAction $workflowAction)
    {
        $workflowAction->update($request->all());

        return response()->json($workflowAction, 200);
    }

    public function delete(WorkflowAction $workflowAction)
    {
        $workflowAction->delete();

        return response()->json(null, 204);
    }
}

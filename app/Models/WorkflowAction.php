<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkflowAction extends Model
{
    protected $fillable = [
        'next_step_id',
        'workflow_step_id',
        'name'
    ];

    public function step()
    {
        return $this->belongsTo(WorkflowStep::class, 'workflow_step_id');
    }

    public function nextStep()
    {
        return $this->belongsTo(WorkflowStep::class, 'next_step_id');
    }
}

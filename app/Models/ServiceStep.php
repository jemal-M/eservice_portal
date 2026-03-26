<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceStep extends Model
{
    protected $fillable = [
        'service_request_id',
        'workflow_step_id',
        'status',
        'handled_by'
    ];

    public function serviceRequest()
    {
        return $this->belongsTo(ServiceRequest::class);
    }

    public function workflowStep()
    {
        return $this->belongsTo(WorkflowStep::class);
    }
    public function handler(){
        return $this->belongsTo(User::class,'handled_by');
    }
}

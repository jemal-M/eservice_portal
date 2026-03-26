<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkflowStep extends Model
{
    protected $fillable = [
        'name', 'workflow_id', 'step_number','level','office_id'
    ];
    public function workflow(){
        return $this->belongsTo(Workflow::class);
    }

    public function office(){
        return $this->belongsTo(Office::class);
    }
    public function actions(){
        return $this->belongsToMany(WorkflowAction::class);
    }
}

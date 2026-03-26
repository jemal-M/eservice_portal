<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
    protected $fillable = [
        'name','service_id'
    ];
 public function steps(){
    return $this->hasMany(WorkflowStep::class);
 }
 public function service(){
    return $this->belongsTo(Service::class);
 }
}


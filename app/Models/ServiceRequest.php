<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $fillable = [
        'user_id',
        'service_id',
        'status',
        'region_id',
        'woreda_id',
        'kebele_id'
    ];
 public function user(){
    return $this->belongsTo(User::class);
 }

 public function service(){
    return $this->belongsTo(Service::class);
 }
 public function steps(){
    return $this->hasMany(ServiceStep::class);
 }
 public function  documents(){
    return $this->hasMany(Document::class);

 }
 public function currentStep(){
    return $this->hasOne(ServiceStep::class)->whereNull('done_by');
 }
}

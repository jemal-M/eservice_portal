<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_category_id','name','description'
    ];
    public function workflow(){
        return $this->hasOne(Workflow::class);
    }
    public function serviceCategory(){
        return $this->belongsTo(ServiceCategory::class);
    }
    public function requests(){
         return $this->hasMany(ServiceRequest::class);
    }
}

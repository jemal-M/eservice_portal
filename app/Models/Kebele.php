<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kebele extends Model
{
    protected $fillable = ['name', 'subcity_id','woreda_id'];
    public function subcity(){
        return $this->belongsTo(Subcity::class);
    }

    public function woreda(){
        return $this->belongsTo(Woreda::class);
    }

    public function offices(){
        return $this->hasMany(Office::class);
    }
}

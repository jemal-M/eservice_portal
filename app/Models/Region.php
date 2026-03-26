<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [ 'name'];
    public function zones(){
        return $this->hasMany(Zone::class);
    }
    public function offices(){
         return $this->hasMany(Office::class);
    }
}

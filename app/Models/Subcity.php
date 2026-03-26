<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcity extends Model
{
    protected $fillable = ['name'];
    public function kebeles(){
         return $this->hasMany(Kebele::class);
    }
    public function offices()
{
         return $this->hasMany(Office::class);
    }
}

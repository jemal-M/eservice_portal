<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'name','type','region_id','zone_id','woreda_id','subcity_id','kebele_id'
    ];
    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function zone(){
        return $this->belongsTo(Zone::class);
    }

    public function woreda(){
        return $this->belongsTo(Woreda::class);
    }

    public function subcity(){
        return $this->belongsTo(Subcity::class);
    }
    public function kebele(){
        return $this->belongsTo(Kebele::class);
    }
    

}

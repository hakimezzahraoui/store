<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['staff_id', 'truck_id', 'from', 'to'];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }
}

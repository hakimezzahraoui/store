<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name', 'password', 'staff_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getIsAdminAttribute()
    {
        return $this->staff->category->category === 'admin';
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function created_trucks()
    {
        return $this->hasMany(Truck::class,'creator_id');
    }

    public function created_charge_trucks()
    {
        return $this->hasMany(ChargeTruck::class,'creator_id');
    }

    public function created_partners()
    {
        return $this->hasMany(Partner::class,'creator_id');
    }

    public function created_trades()
    {
        return $this->hasMany(Trade::class,'creator_id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = 'services';
    protected $fillable = ['salon_id', 'name', 'description', 'price', 'duration'];

    public function salon(){
       return 
        $this->belongsToMany(salon::class,'salons_services','service_id','salon_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class salon extends Model
{
    protected $table = 'salons';
    protected $fillable = ['user_id','address', 'phone', 'description','image'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function services()
    {
        return $this->belongsToMAny(service::class,'salons_services','salon_id','service_id');
    }
}

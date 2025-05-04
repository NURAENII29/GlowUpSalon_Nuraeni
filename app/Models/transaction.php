<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = ['booking_id', 'amount', 'payment_method', 'status'];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}

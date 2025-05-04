<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class salon extends Model
{
    protected $fillable = ['user_id', 'name', 'address', 'phone', 'description'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}

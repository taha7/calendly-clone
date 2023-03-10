<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'day', 'start', 'end'];
    
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }
}

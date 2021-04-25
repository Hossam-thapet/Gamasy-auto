<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=[
        'carimages', 'car_id'
    ];
    public function car()
    {
        return $this->belongsTo(car::class);
    }
}

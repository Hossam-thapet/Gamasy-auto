<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable=[
        'airbags' , 'air_conditionning' , 'sun_roof' ,'sub_name','car_id','catprice','abs','cruise_control',
        'rear_sensors','front_sensors','multifunction_steering_wheel','start_button','digita_dashboard','usb',
        'aux','esp','ebd','navigation','cylinder','recommeneded_fuel','moment','hourse_power'

    ];
    public function cars ()
    {
        return $this->belongsTo(car::class);
    }
}

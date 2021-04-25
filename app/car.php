<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $fillable = [
        'brand','case','price','type','version','description','Adescription','image','model'
    ];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function subcategory()
    {
        return $this->hasMany(Subcategory::class);
    }
}

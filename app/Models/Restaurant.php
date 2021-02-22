<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\Time;

class Restaurant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function areas()
    {
        return $this->belongstoMany(Area::class);
    }




    public function path()
    {
        return route('restaurants.show', $this);
    }
    
    public function times()
    {
        return $this->hasOne(Time::class, 'id');
        
    }
}

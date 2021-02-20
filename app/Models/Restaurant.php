<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\Time;
use App\Models\Product;


class Restaurant extends Model
{
    use HasFactory;

    public function path()
    {
        return route('restaurants.show', $this);
    }

    public function areas()
    {
        return $this->belongstoMany(Area::class);
    }

    public function times()
    {
        return $this->hasOne(Time::class, 'id');
        
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function show(Restaurant $results)
    {
       
        return view('restaurants.show', ['results' => $results]);

    }
}

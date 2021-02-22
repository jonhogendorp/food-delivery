<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

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
}

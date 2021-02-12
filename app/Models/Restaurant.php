<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Restaurant extends Model
{
    use HasFactory;

    public function areas()
    {
        return $this->belongstoMany(Area::class);
    }
}

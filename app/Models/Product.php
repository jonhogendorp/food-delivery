<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;
class Product extends Model
{
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'food_name', 'size', 'price', 'restaurant_id',
];
public function restaurant()
{
    return $this->belongsTo(Restaurant::class);
}
}

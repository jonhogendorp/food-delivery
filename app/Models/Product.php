<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Restaurant;

class Product extends Model
{
    use HasRoles, HasFactory;
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'food_name', 'size', 'price',
];
}

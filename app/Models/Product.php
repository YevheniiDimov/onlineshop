<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Product class with name, image, description, price fields
class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'image', 'description', 'price'];
    protected $guarded = ['id'];
}

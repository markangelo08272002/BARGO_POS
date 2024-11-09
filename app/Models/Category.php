<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Define the fillable fields for mass assignment
    protected $fillable = ['category_name', 'short_description'];

    // Define the relationship to products (if needed)
    public function products()
	{
	    return $this->hasMany(Product::class, 'category_id');
	}

}

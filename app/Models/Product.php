<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 
        'unit', 
        'price', 
        'qty', 
        'category_id',
    ];

    // Define the 'category' relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

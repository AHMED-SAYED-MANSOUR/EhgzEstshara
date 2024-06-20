<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['id' , 'ProductName' , 'Quantity' , 'Price', 'Category', 'Description', 'img', 'offer','Brand', 'Material', 'Color', 'created_at', 'updated_at'];



    // One-To-Many Relation [Products -> Cart]
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

}

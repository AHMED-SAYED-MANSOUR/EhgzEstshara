<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table='carts';
    protected $fillable = ['id', 'quantity', 'user_id', 'product_id', 'created_at', 'updated_at'];


                        // Relations

    // One-To-One Relation [Cart -> User]
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // One-To-Many Relation [Cart -> Products]
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = ['id', 'user_id', 'status', 'total_price', 'created_at', 'updated_at'];


                                // Relations

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function OrderItem()
    {
        return $this->hasMany(OrderItem::class);
    }
}

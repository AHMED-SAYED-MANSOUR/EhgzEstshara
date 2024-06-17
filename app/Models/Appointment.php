<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table ='appointments';
//    protected $guarded;

    protected $fillable = [
        'id', 'date', 'time', 'doctor', 'name', 'phone', 'email', 'created_at', 'updated_at'
    ];
    public $hidden = [];
}

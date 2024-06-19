<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainers';
    protected $fillable=['id', 'name','title','image', 'facebook', 'instagram', 'twitter', 'created_at', 'updated_at' ];
}

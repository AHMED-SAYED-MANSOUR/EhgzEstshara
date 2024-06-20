<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $fillable=['id', 'name','department','image', 'facebook', 'twitter', 'instagram', 'created_at', 'updated_at'];
}

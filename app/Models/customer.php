<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table ='customers';
    protected $fillable = [
        'first-name',
        'last-name',
        'email',
        'phone',
        'message',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $table ='coaches';
    protected $fillable = [
        'id',
        'first-name',
        'last-name',
        'email',
        'phone',
        'message',

    ];
}

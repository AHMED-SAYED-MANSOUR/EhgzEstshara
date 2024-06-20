<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConnectionMessage extends Model
{
    use HasFactory;

    protected $table = 'connection_messages';
    protected $fillable = ['id', 'first_name', 'last_name', 'email', 'phone', 'message'];
    protected $hidden = ['created_at', 'updated_at'];
}

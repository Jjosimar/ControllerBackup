<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hemocentro extends Model
{
    protected $table = 'hemocentros';
    
    protected $fillable = [
        'name', 'email', 'phone', 'state', 'city', 'address', 'user'
    ];
}

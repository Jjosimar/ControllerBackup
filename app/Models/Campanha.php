<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $table = 'campanhas';
    
    protected $fillable = [
        'titulo', 'texto', 'hemocentro'
    ];
}

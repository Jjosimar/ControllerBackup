<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampanhaTipoSangue extends Model
{
    protected $table = 'camp_tp_sangue';
    
    protected $fillable = [
         'tipoSang', 'campanha'
    ];
}

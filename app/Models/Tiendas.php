<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiendas extends Model
{
    use HasFactory;
    protected $table ='tienda';
    protected $primaryKey ='id_tienda';
    protected $fillable=[
        'clave',
        'nombret',
        'fecha_crea',
        'fecha_mod',
        'foto'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table ='productos';
    protected $primaryKey ='id_productos';
    protected $fillable=[
        'codigo',
        'nombrep',
        'cantidad',
        'costo',
        'id_tipo',
        'id_tienda',
        'activo',
        'fec_crea',
        'fec_mod',
        'foto'
    ];
}

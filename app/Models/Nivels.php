<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivels extends Model
{
    use HasFactory;
    protected $table ='nivel';
    protected $primaryKey ='id_nivel';
    protected $fillable=[
        'clave',
        'nombre',
        'activo',
        'fecha_cre',
        'fecha_mo'

    ];
}

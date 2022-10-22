<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table ='usuario';
    protected $primaryKey ='id_usuario';
    protected $fillable=[
        'matricula',
        'nombreu',
        'app',
        'apm',
        'fech_nac',
        'genero',
        'foto',
        'email',
        'pass',
        'nivel',
        'activo'
    ];
}

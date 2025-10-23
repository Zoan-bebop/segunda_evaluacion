<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nombreUsuario',
        'contrasenia',
        'estado',
    ];

    protected $hidden = [
        'contrasenia',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->contrasenia;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clientes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clientes';
    protected $fillable = [
        'Pnombre',
        'Snombre',
        'Papellido',
        'Sapellido',
        'Direccion',
        'Telefono',
    ];
}

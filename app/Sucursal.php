<?php

namespace InventarioFarmacia;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'Sucursal';
    protected $primaryKey = 'Id_Sucursal';

    public $timestamps = true;

    protected $fillable = [
        'Id_Sucursal',
        'Nombre_Sucursla',
        'Direccion_Sucursal',
        'Telefono',
        'Ciudad_Sucursal',
        'Provincia_Sucursal',
        'Pais_Sucursal'
    ];

    protected $guarded = [];
}

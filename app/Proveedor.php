<?php

namespace InventarioFarmacia;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected  $table = 'Proveedor';
    protected $primaryKey = 'Id_Proveedor';

    public  $timestamps = true;

    protected  $fillable = [
                                'Nombre_Proveedor',
                                'Apellido_Proveedor',
                                'Ciudad_Proveedor',
                                'Telefono_Oficina',
                                'Telefono_Celular',
                                'Correo_Electronico_Proveedor'
                            ];

    protected $guarded = [];
}

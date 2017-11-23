<?php

namespace InventarioFarmacia;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'Stock';
    protected $primaryKey = 'Id_Stock';

    public $timestamps = true;

    protected $fillable = [
                            'Id_Stock',
                            'Producto_Stock',
                            'Cantidad_Stock',
                            'Fecha_Vencimiento_Stock',
                            'Fecha_Fabricacion_Stock',
                            'Fecha_Compra_Stock',
                            'Tipo_Stock',
                            'Medida_Stock'
                           ];

    protected $guarded = [];
}

<?php

namespace InventarioFarmacia;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected  $table='Producto';

    protected $primaryKey='Id_producto';

    public $timestamps = true;

    protected $fillable = ['Codigo_Producto', 'Nombre_Producto','Categoria_Producto','Estado_Producto','Detalle_Producto'];

    protected $guarded = [];
}

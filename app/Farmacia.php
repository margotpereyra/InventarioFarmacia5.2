<?php

namespace InventarioFarmacia;

use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    protected $table='Farmacia';

    protected $primaryKey = 'Id_Farmacia';

    public $timestamps = true;

    protected $fillable = [ 'Nombre_Farmacia, NIT'];

    protected $guarded = [];
}

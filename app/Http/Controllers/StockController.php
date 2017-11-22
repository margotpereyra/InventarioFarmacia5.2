<?php

namespace InventarioFarmacia\Http\Controllers;

use Illuminate\Http\Request;

use InventarioFarmacia\Http\Requests;
use InventarioFarmacia\Stock;
use Illuminate\Support\Facades\Redirect;
use InventarioFarmacia\Http\Request\StockFormRequest;
//user DB;

class StockController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view("almacen.stock.index");
    }

    public function create()
    {
        return view("almacen.stock.create");
    }

    public function store()
    {
        
    }

    public function show()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}

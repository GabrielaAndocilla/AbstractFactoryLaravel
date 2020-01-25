<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AbstractFabricaCom;
use App\Hamburguesas;



class FabricaHamburguesas extends AbstractFabricaCom
{
    public function ordenar($nombre, $cantidad) {
        return new Hamburguesas($nombre, $cantidad);
    }
}

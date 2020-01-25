<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AbstractFabricaCom;
use App\Pizzas;


class FabricaPizzas extends AbstractFabricaCom
{
    public function ordenar($nombre, $cantidad) {
        return new Pizzas($nombre, $cantidad);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AbstractFabricaCom;


class FabricaAlitas extends AbstractFabricaCom
{
    public function ordenar($nombre, $cantidad) {
        return new Alitas($nombre, $cantidad);
    }
}

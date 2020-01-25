<?php

namespace App;


abstract class AbstractComidaRapida 
{
    
    abstract public  function getNombre();
    abstract public  function getCantidad();
    abstract public  function setNombre($nombre);
    abstract public  function setCantidad($cantidad);
}

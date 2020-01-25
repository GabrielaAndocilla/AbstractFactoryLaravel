<?php

namespace App;
use App\AbstractComidaRapida;


use Illuminate\Database\Eloquent\Model;

class Pizzas extends AbstractComidaRapida
{
    public $nombre;
    public $cantidad;

    function __construct($nom,$can)
    {
        $this->setNombre($nom);
        $this->setCantidad($can);
    }
    public function getNombre(){
        return $this->nombre;
    }
    public  function getCantidad(){
        return $this->cantidad;

    }
    public  function setNombre($nombre){
        $this->nombre= $nombre;
    }
    public  function setCantidad($cantidad){
        $this->cantidad= $cantidad;

    }

    public function __toString()
    {
        try 
        {
            return  "Pizzas ".$this->getNombre()." Cantidad ".$this->getCantidad().".......................".$this->getCantidad()*3.70;
        } 
        catch (Exception $exception) 
        {
            return 'No funciono';
        }
    }


}

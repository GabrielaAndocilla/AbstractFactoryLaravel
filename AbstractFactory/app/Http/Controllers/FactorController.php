<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FabricaAlitas;
use App\FabricaPizzas;
use App\FabricaHamburguesas;

class FactorController extends Controller
{
    public function Index( ) { 
        return view('Index'); 
        
    } 
    public function Orden( ) { 
        return view('Orden'); 
        
    } 
    public function Tim(Request $reqs) { 
        $pila = array();
        $alitas1="";
        $alitas2="";
        $alitas3="";
        $pizzas1="";
        $pizzas2="";
        $pizzas3="";
        $hamburg1="";
        $hamburg2="";
        $hamburg3="";
        $AbstractFabricaC =null;
        if ($reqs->input('Apic')>0) {   
            $AbstractFabricaC= new FabricaAlitas();
            $a =$AbstractFabricaC->ordenar("Picantes",$reqs->input('Apic'));
            $alitas1=(string)$a;
        }
        if ($reqs->input('Abro')>0) {   
            $AbstractFabricaC= new FabricaAlitas();
            $a =$AbstractFabricaC->ordenar("Broaster",$reqs->input('Abro'));
            $alitas2=(string)$a;
        }
        if ($reqs->input('Abbq')>0) {   
            $AbstractFabricaC= new FabricaAlitas();
            $a =$AbstractFabricaC->ordenar("BBQ",$reqs->input('Abbq'));
            $alitas3=(string)$a;
        }
        if ($reqs->input('PP')>0) {   
            $AbstractFabricaC= new FabricaPizzas();
            $a =$AbstractFabricaC->ordenar("Pepperoni",$reqs->input('PP'));
            
            $pizzas1=(string)$a;
        }
        if ($reqs->input('Hw')>0) {   
            $AbstractFabricaC= new FabricaPizzas();
            $a =$AbstractFabricaC->ordenar("Hawaiana",$reqs->input('Hw'));
            $pizzas2=(string)$a;
        }
        if ($reqs->input('Pjam')>0) {   
            $AbstractFabricaC= new FabricaPizzas();
            $a =$AbstractFabricaC->ordenar("Jamón",$reqs->input('Pjam'));
            $pizzas3=(string)$a;
        }
        if ($reqs->input('Cheese')>0) {   
            $AbstractFabricaC= new FabricaHamburguesas();
            $a =$AbstractFabricaC->ordenar("CheeseBurger",$reqs->input('Cheese'));
            $hamburg1=(string)$a;
        }
        if ($reqs->input('Mush')>0) {   
            $AbstractFabricaC= new FabricaHamburguesas();
            $a =$AbstractFabricaC->ordenar("Mushroom Burger",$reqs->input('Mush'));
            $hamburg2=(string)$a;
        }
        if ($reqs->input('Chick')>0) {   
            $AbstractFabricaC= new FabricaHamburguesas();
            $a =$AbstractFabricaC->ordenar("Chicken burger",$reqs->input('Chick'));
            $hamburg3=(string)$a;
        }
        array_push($pila,$alitas1,$alitas2,$alitas3,$hamburg1,$hamburg2,$hamburg3,$pizzas1,$pizzas2,$pizzas3);

        return view("Orden",['pila'=>$pila]);

                
    }
}

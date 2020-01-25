<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Realice su orden</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ URL::asset('css/indexstyle.css') }}">
        <script src="{{asset('js/javit.js')}}"></script>
        

    </head>
    <body>
        
        <h1 id="titulo">SELECCIONAR EL PEDIDO</h1>
        
        <form action="{{route('vist')}}" method="POST" role="form"> 
            @csrf
            <p class=titulo>ALITAS </p>
            <div class="seccionAlitas" class="form-group">
                <img src="{{asset('imagenes/alitPicantes.jpg')}}" alt="Alitas Picantes">
                <p>Picantes</p>
                <input type= button  value=+ onclick="ordenar(12)"/>
                <input type= button  value=- onclick="ordenar(13)" />
                <input type="text" id="Apic" class="form-control" name="Apic" disabled ></input>
                <img src="{{asset('imagenes/aliBroaster.jpg')}}" alt="Alitas Broaster">
                <p >Broaster</p>
                <input type= button  value=+ onclick="ordenar(14)"/>
                <input type= button  value=- onclick="ordenar(15)"/>
                <input type="text" id="Abro" class="form-control" name="Abro" disabled ></input>
                <img src="{{asset('imagenes/alitBBQ.jpg')}}" alt="Alitas BBQ"  >
                <p>BBQ</p>
                <input type= button  value=+ onclick="ordenar(16)"/>
                <input type= button  value=- onclick="ordenar(17)"/>
                <input type="text" id="Abbq" class="form-control" name="Abbq" disabled  ></input>
            </div>
            <p class=titulo>HAMBURGUESAS</p>
            <div class="seccionHamburguesa" class="form-group">
                <img src="{{asset('imagenes/cheeseburger.webp')}}" alt="CheeseBurger">
                <p>CheeseBurger</p>
                <input type= button  value=+ onclick="ordenar(6)"/>
                <input type= button  value=- onclick="ordenar(7)" />
                <input id="Cheese" type="text" class="form-control" name="Cheese" disabled ></input>
                <img src="{{asset('imagenes/mushroomBurger.jpg')}}" alt="Mushroom Burger">
                <p >Mushroom Burger</p>
                <input type= button  value=+ onclick="ordenar(8)"/>
                <input type= button  value=- onclick="ordenar(9)"/>
                <input type="text" id="Mush"class="form-control" name="Mush" disabled ></input>
                <img src="{{asset('imagenes/chickenburg.webp')}}" alt="Chicken Burger">
                <p>Chicken burger</p>
                <input type= button  value=+ onclick="ordenar(10)"/>
                <input type= button  value=- onclick="ordenar(11)"/>
                <input type="text" id="Chick" class="form-control" name="Chick" disabled ></input>
            </div>
            <p class=titulo>PIZZAS</p>
            <div class="seccionPizza" class="form-group">
                <img src="{{asset('imagenes/pizzaPp.jpg')}}" alt="Pepperoni">
                <p>Pepperoni</p>
                <input type= button  value=+ onclick="ordenar(0)"/>
                <input type= button  value=- onclick="ordenar(1)" />
                <input type="text" id="PP" class="form-control"name="PP" disabled ></input>
                <img src="{{asset('imagenes/pizzahw.jpg')}}" alt="hawaiana">
                <p >Hawaiana</p>
                <input type= button  value=+ onclick="ordenar(2)"/>
                <input type= button  value=- onclick="ordenar(3)"/>
                <input type="text" id="Hw" class="form-control"name="Hw" disabled ></input>
                <img src="{{asset('imagenes/pizzaJ.jpg')}}" alt="Jamón">
                <p>Jamón</p>
                <input type= button  value=+ onclick="ordenar(4)"/>
                <input type= button  value=- onclick="ordenar(5)"/>
                <input type="text" id="Pjam" class="form-control"name="Pjam" disabled ></input>
                
            </div>
            <var> 
            <input id="Orden"  type="submit" value="Ordenar" onclick="mandar()" />

        </form>
    </body>
</html>

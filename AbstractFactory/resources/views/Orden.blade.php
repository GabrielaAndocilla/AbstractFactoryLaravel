<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Orden del Cliente</title>

        <style>
        body{
            background:#758184;
        }
        .container{
            background: #1b262c;
            text-align:left;
            height:auto;
            color:#4f98ca;
            width:70%;
            height:600px;
            margin-left:15%;
            border-radius: 8px;

        }
        .subcont{
            columns: 2;            
            margin-bottom:2%;
            margin-top:2%;
        }
        
        hr{
            margin-left:20%;
            margin-right:5%;
        }
        h3{
            font-size: 2em;
            text-align: center;
            font-weight: 20;
            margin-bottom: 5em;
            color: #fff;
        }
        h1{
            text-align: center;
            color:#ffff;
        }
    </style>

    </head>
    <body>
    
        
        <h1>Orden</h1>
        <div class=container>
            
            <div class=subcont style=padding-top:10%>
                <div><h3>ALITAS</h3></div> 
                <div>
                        <p>{{ $pila[0]}}</p>
                        <p>{{ $pila[1]}}</p>
                        <p>{{ $pila[2]}}</p>
                </div>
            </div>
             
            <div class=subcont>
                <div><h3>HAMBURGUESAS</h3></div> 
                <div>
                    <p>{{ $pila[3]}}</p>
                    <p>{{ $pila[4]}}</p>
                    <p>{{ $pila[5]}}</p>
                </div>
            </div>
            
            <div class=subcont>
                <div><h3>PIZZAS</h3></div> 
                <div>
                    <p>{{ $pila[6] }}</p>
                    <p>{{ $pila[7]}}</p>
                    <p>{{ $pila[8]}}</p>
                </div>
            </div>  



            
        </div>
        
    </body>
</html>
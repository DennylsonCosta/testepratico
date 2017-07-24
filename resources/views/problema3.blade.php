<!DOCTYPE html>
<html lang="en">
<head>
    <title>Problema 3</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <style>
        body {
            margin-bottom:50px;
        }
        .enunciado{
            margin: auto;
            width: 60%;
            font-weight: bold;
            text-align: justify;
        }
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
            bottom:0;
            width: 100%;
            position: fixed;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container-fluid">

        <div class="row content">
            
            <div class="col-sm-3 sidenav">
                <h4>Menu</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('Problema 1') }}">Problema 1</a></li>
                    <li><a href="{{ route('Problema 2') }}">Problema 2</a></li>
                    <li class="active"><a href="{{ route('Problema 3') }}">Problema 3</a></li>
                    <li><a href="{{ route('Problema 4') }}">Problema 4</a></li>
                </ul><br>
            </div>
    
            <div class="col-sm-9">

                <div class="enunciado">
                    <h3>Problema 3</h3>
                    <h4>
                        Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m 
                        e cresce 3 centímetros por ano. Construir um algoritmo que calcule e 
                        imprima quantos anos serão necessários para que Juca seja maior que Chico.
                    </h4>
                </div>

                <hr>
                {{ Form::open(array('url' => 'problema3','action' => 'problema1Controller@exibir')) }}
                    <p>
                        {{ Form::submit('Exibir resultado', array('class' => 'btn btn-success')) }}
                    </p>
                {{ Form::close() }}
                <hr>
                
                @isset($resultado)
                    <div>
                        <h3>
                            <p>Seriam necessários {{ $anos }} anos para que {{ $resultado[1]->nome }} ficasse maior que {{ $resultado[0]->nome }}.</p>
                            <p>{{ $resultado[1]->nome }} terá {{ $resultado[1]->altura }}m e {{ $resultado[0]->nome }} terá {{ $resultado[0]->altura }}m.</p>
                        </h3>
                    </div>
                @endisset

            </div>
        </div>
    </div>

<footer class="container-fluid">
    <p>Dennylson Costa</p>
</footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Problema 4</title>
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
                    <li><a href="{{ route('Problema 3') }}">Problema 3</a></li>
                    <li class="active"><a href="{{ route('Problema 4') }}">Problema 4</a></li>
                    <li><a href="{{ route('Problema 5') }}">Problema 5</a></li>
                </ul>
                <br>
            </div>

            <div class="col-sm-9">

                <div class="enunciado">
                    <h3>Problema 4</h3>
                    <h4>
                        Criar um algoritmos que entre com uma palavra e imprima conforme o exemplo 
                        <ul>
                            <li>Palavra: sonho</li>
                            <li>SONHO </li>
                            <li>SONHO SONHO</li> 
                            <li>SONHO SONHO SONHO </li>
                            <li>SONHO SONHO SONHO SONHO</li>
                        </ul>
                    </h4>
                </div>

                <hr>
                {{ Form::open(array('url' => 'problema4','action' => 'problema4Controller@recibo')) }}
                    <p>
                        {{ Form::label('Palavra', 'Palavra') }}
                    </p>
                    <p>
                        <input type="text" name="palavra" required>
                    </p>
                    <p>
                        {{ Form::submit('Imprimir', array('class' => 'btn btn-success')) }}
                    </p>
                {{ Form::close() }}
                <hr>

                @isset($palavras)
                    <h3>Palavras utilizadas anteriormente:</h3>
                    <ul class="list-group">
                        @foreach($palavras as $palavra)
                            <li class="list-group-item">
                                {{ $palavra->palavra }}
                            </li>
                        @endforeach
                    </ul>
                @endisset

                @isset($resultado)
                    <h3>Resultado:</h3>
                    <ul>
                        @foreach($resultado as $res)
                            <li>
                                {{ $res }}
                            </li>
                        @endforeach
                    </ul>
                @endisset

            </div>

        </div>

    </div>

<footer class="container-fluid">
    <p>Dennylson Costa</p>
</footer>

</body>
</html>
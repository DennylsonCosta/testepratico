<!DOCTYPE html>
<html lang="en">
<head>
    <title>Problema 2</title>
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
        td{
            text-align: center;
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
                    <li class="active"><a href="{{ route('Problema 2') }}">Problema 2</a></li>
                    <li><a href="{{ route('Problema 3') }}">Problema 3</a></li>
                    <li><a href="{{ route('Problema 4') }}">Problema 4</a></li>
                </ul>
                <br>
            </div>

            <div class="col-sm-9">
            
                <div class="enunciado">
                    <h3>Problema 2</h3>
                    <h4>
                        Criar um algoritmo com uma matriz 5x5 e imprima: toda a matriz, 
                        a matriz gerada só com números ímpares e outra só com números pares.
                    </h4>
                </div>
                <hr>
                @isset($quant)
                    <h4>Matrizes geradas: {{ $quant }}</h4>
                @endisset
                {{ Form::open(array('url' => 'problema2','action' => 'problema1Controller@gerar')) }}
                    <p>
                        {{ Form::label('Gerar Matriz', 'Gerar Matriz') }}
                    </p>
                    <p>
                        {{ Form::submit('Gerar', array('class' => 'btn btn-success')) }}
                    </p>
                {{ Form::close() }}
                <hr>

                @isset($matriz)
                    <div class="row">
                        <div class="col-sm-4">
                            <h2>Matriz gerada</h2>
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    @foreach($matriz as $m)
                                        <tr>
                                            @foreach($m as $v)
                                                <td class="">{{ $v }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
        
                        <div class="col-sm-4">
                            <h2>Matriz impar</h2>
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    @foreach($impar as $m)
                                        <tr>
                                            @foreach($m as $v)
                                                <td>{{ $v }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <h2>Matriz par</h2>
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    @foreach($par as $m)
                                        <tr>
                                            @foreach($m as $v)
                                                <td>{{ $v }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

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
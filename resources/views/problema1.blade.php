<!DOCTYPE html>
<html lang="en">
<head>
    <title>Problema 1</title>
    <meta charset="utf-8">
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
                    <li class="active"><a href="{{ route('Problema 1') }}">Problema 1</a></li>
                </ul>
                <br>
            </div>

            <div class="col-sm-9">
                <div class="enunciado">
                    <h3>Problema 1</h3>
                    <h4>
                        A biblioteca de uma universidade deseja fazer um algoritmo que leia 
                        o nome do livro que será emprestado, o tipo de usuário (professor ou
                        aluno) e possa imprimir um recibo conforme mostrado a seguir. 
                        Considerar que o professor tem 10 dias para devolver o livro o 
                        aluno somente 3 dias.
                    </h4>
                </div>
                <hr>

                {{ Form::open(array('url' => 'problema1','action' => 'problema1Controller@recibo')) }}
                <p>
                    {{ Form::label('Titulo do livro', 'Título do Livro') }}
                </p>
                <p>
                    <input type="text" name="titulo" required>
                </p>
                <p>
                    {{ Form::radio('tipo', 'professor', true)}} Professor
                    {{ Form::radio('tipo', 'aluno')}} Aluno
                </p>
                <p>
                    {{ Form::submit('Emprestar', array('class' => 'btn btn-success')) }}
                </p>
                {{ Form::close() }}

                <hr>

                <div class="row">
                    
                    <div class="col">
                        @isset($prob)
                            <h2>Recibo</h2>
                            <h3>
                                <p>Titulo: {{ $prob->titulo }}</p>
                                <p>Tempo para devolução: {{ $prob->dias }} dias</p>
                            </h3>
                        @endisset
                    </div>

                    <div class="col align-self-end">
                        @isset($problemas)
                            <h3>Livros emprestados:</h3>
                            <ul class="list-group">
                                @foreach($problemas as $problema)
                                    <li class="list-group-item">
                                        {{ $problema->titulo }}
                                        <span class="badge badge-default badge-pill">{{ $problema->dias }} dias para devolução</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endisset
                    </div>

                </div>
        
            </div>

        </div>

    </div>

    <footer class="container-fluid">
        <p>Dennylson Costa</p>
    </footer>

</body>
</html>
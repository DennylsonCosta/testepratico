<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <style>
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }
        .enunciado{
            margin: auto;
            width: 60%;
            font-weight: bold;
            text-align: justify;
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
                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('Problema 1') }}">Problema 1</a></li>
                <li><a href="{{ route('Problema 2') }}">Problema 2</a></li>
                <li><a href="{{ route('Problema 3') }}">Problema 3</a></li>
            </ul>
            <br>
        </div>

        <div class="col-sm-9">
            <div class="enunciado">
                <h2>Teste Prático - Programador PHP</h2>
                <hr>
                <h3>Dennylson Costa</h3>
                <p>Escolha o Problema no menu para navegar até a página do mesmo.</p>
            </div>
        </div>

    </div>

</div>

<footer class="container-fluid">
    <p>Dennylson Costa</p>
</footer>

</body>
</html>

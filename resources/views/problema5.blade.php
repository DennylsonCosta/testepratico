<!DOCTYPE html>
<html lang="en">
<head>
    <title>Problema 5</title>
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
              <li><a href="{{ route('Problema 4') }}">Problema 4</a></li>
              <li class="active"><a href="{{ route('Problema 5') }}">Problema 5</a></li>
          </ul><br>
      </div>

      <div class="col-sm-9">
        
          <div class="enunciado">
              <h3>Problema 5</h3>
              <h4>
                  Criar algoritmos com um campo que possa receber apenas números e virgulas, 
                  separe os valores enviados e valide aqueles que são um número válido da 
                  <a href="https://pt.wikipedia.org/wiki/Sequ%C3%AAncia_de_Fibonacci" target="_blank" >
                  Sequência de Fibonacci</a> e imprima os números de forma crescente, conforme o exemplo:
                  <ul>
                      <li>INPUT RECEBE: 1,13,55,21,5,83 </li>
                      <li>Imprimi: 1,5,13,21,55</li>
                  </ul>
              </h4>
          </div>
          <hr>
          @isset($alerta)
              <div class="alert alert-danger" role="alert">
                  <strong>Digite apenas numeros separados por virguas .</strong>
              </div>
          @endisset
          {{ Form::open(array('url' => 'problema5','action' => 'problema5Controller@verifica')) }}
              <p>
                  {{ Form::label('Numeros', 'Numeros') }}
              </p>
              <p>
                  <input type="text" name="numeros" required>
              </p>
              <p>
                  {{ Form::submit('Imprimir', array('class' => 'btn btn-success')) }}
              </p>
          {{ Form::close() }}

          <hr>

          @isset($anteriores)
              <h3>Sequencias digitadas anteriormente:</h3>
              <ul class="list-group">
                  @foreach($anteriores as $anterior)
                      <li class="list-group-item">
                          {{ $anterior->numeros }}
                      </li>
                  @endforeach
              </ul>
          @endisset

          @isset($resultado)
              {{ $resultado }}
          @endisset

        </div>

      </div>

    </div>

<footer class="container-fluid">
    <p>Dennylson Costa</p>
</footer>

</body>
</html>
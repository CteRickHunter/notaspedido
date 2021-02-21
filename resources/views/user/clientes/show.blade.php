

<html>
<head>
<link href="\css\bootstrap.min.css" rel="stylesheet" >

</head>

<body>

<!--
<form name="datos" action="home" method="PATCH">    completar la accion  - Agregamos labels 
-->
{!! Form::open(['url' => 'home', 'method' => 'get' ]) !!}


<div class="container">
  <div class="row justify-content-center">
  
  <div class="col-md-8">
  <div class="card">

  <H1 style="text-align:center;"> Cliente Elegido </H1>

    <div class="card-body">
        

    <div class="row g-3">
        <div class="col">
            <input type="text" class="form-control"  name="codigoCli" value="{{$cliente->codigoCli}}" readonly>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="nombreCli" name="nombreCli" value="{{$cliente->nombreCli}}" readonly>
        </div>
    </div>

    <div class="row g-3">
        <div class="col">
            <input type="text" class="form-control"  name="localidadCli" value="{{$cliente->localidadCli}}" readonly>
        </div>
        <div class="col">
            <input type="text" class="form-control"  name="provinciaCli" value="{{$cliente->provinciaCli}}" readonly>
        </div>
    </div>

    <div class="mb-3">
        <input type="text" class="form-control" name="direccionCli" value="{{$cliente->direccionCli}}" readonly>
        <input type="hidden" class="form-control" id="idCli" name="idCli" value="{{$cliente->id}}" disabled>
    </div>




         
    </div>

    

    

    <div style="text-align:center;">
        <input type="submit" class="btn btn-primary btn-block" value="Confirmar Cliente" >
        
        
        
        &nbsp &nbsp &nbsp
        <input type=submit class="btn btn-primary btn-block" value="Salir sin Confirmar">
    </div>
  </div>
  </div>
  </div>
</div>
<!--  </form>  -->



</body>



</html>
<html>
<head>
<link href="\css\bootstrap.min.css" rel="stylesheet" >


</head>

<body>
<div class="container-lg">

<H1> Página de Clientes </H1>

<table class="table-striped">
    @foreach($clientes as $cliente)
        <tr>
            <td> {{$cliente->id}} </td>
            <td> <a href="clientes/{{$cliente->id}}" + {{$cliente->id}}> {{$cliente->nombreCli}} </a> </td>
        </tr>
    @endforeach
</table>

</div>
</body>



</html>
<html>
<head>
<link href="\css\bootstrap.min.css" rel="stylesheet" >
</head>

<body>

<form action="/home" method="GET">
<!-- <p><input type="submit" value="Logout"></p> -->
</form>
<div class="container-lg">
    <div class="col-md-8">
        <H1>  Página Index de Pedido </H1>
        <a href="productos" > <input type="button" value="Agregar Producto"> </a>
    </div>            

<table class="table table-striped" >
    <th> Línea </th>
    <th> Descripción Producto </th> 
    <th> Cantidad </th>
    <th> Precio Un. </th>
    @foreach($items as $item)
        <tr>
        
            <td> {{$item->lineaItem}} </td>
            <td> {{$item->descripcion}} </td> 
            <td> {{$item->cantidadPro}} </td>
            <td> {{$item->precioItem}} </td>
            
        </tr>
    @endforeach
</table>

</div>
</body>




</html>
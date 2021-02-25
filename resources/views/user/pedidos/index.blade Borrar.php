
<html>
<head>
<link href="\css\bootstrap.min.css" rel="stylesheet" >

 
</head>

<body>


<form action="/home" method="GET">
<!-- <p><input type="submit" value="Logout"></p> -->
</form>
<div class="container-lg">
    <div class="col-md-4">
        <H1>  Detalle del Pedido </H1>
        
        <input type="text" name="cliente" size="50"  value="{{$registro->nombreCli}}" disabled />
        <div class="container">
           
            <table class="table table-sm table-bordered border-primary" >
                <tr>
                    <th> Neto </th>
                    <th> IVA </th> 
                    <th> Total </th>
                </tr>
                <tr>
                    <td> <?PHP echo number_format(floatval($tot), 2, ',', '.'); ?></td>
                    <td> <?PHP echo number_format(floatval($tot*0.21), 2, ',', '.'); ?> </td>
                    <td> <?PHP echo number_format(floatval($tot*1.21), 2, ',', '.'); ?></td>
                </tr>
            </table>
        </div>
        <!--    
            <td> <input type="text" name="total" size="20" value="${{$tot}}" disabled /> </td>
                    <td> <input type="text" name="iva" size="15" value="${{$tot*0.21}}" disabled /> </td> 
                    <td> <input type="text" name="iva" size="15" value="${{$tot*1.21}}" disabled /> </td>
        -->
        
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Acción
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="productos">Agregar Producto</a></li>
                <li><a class="dropdown-item" > - - - - - - - - - - </a></li>
                <li><a class="dropdown-item" href="#">Terminar Pedido</a></li>
            </ul>
        </div>


        
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>




</html>

<html>
<head>
<link href="\css\bootstrap.min.css" rel="stylesheet" >

 
</head>

<body>



<!-- <p><input type="submit" value="Logout"></p> -->

<div class="container-lg">
    <div class="col-md-8">
        <H1>  Detalle del Pedido </H1>
        
        <input type="text" name="cliente" size="50"  value="{{$registro->nombreCli}}" disabled />

        <form action="pedidos/create" method="GET">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table  table-bordered border-primary" >
                        <tr class="table-info">
                        <th> Neto </th>
                        <th> IVA </th> 
                        <th> Total </th>
                        </tr>
                        <tr class="table-dark">
                        <td> <?PHP echo number_format(floatval($tot), 2, ',', '.'); ?></td>
                        <td> <?PHP echo number_format(floatval($tot*0.21), 2, ',', '.'); ?> </td>
                        <td> <?PHP echo number_format(floatval($tot*1.21), 2, ',', '.'); ?></td>
                        </tr>
                        </table>
                    </div>
                    <div class="col">
                        <div class="input-group">
                        <span class="input-group-text"> Mensaje:</span>
                        <textarea class="form-control" name="nota" aria-label="With textarea"> . </textarea>
                        </div>
                    </div>
                </div>
            </div>
      
            <a class="btn btn-primary" href="productos" role="button">Agregar Producto</a>
            <button class="btn btn-primary" type="submit">Terminar Pedido</button>

        </form>


      


        
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

<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">




</body>




</html>
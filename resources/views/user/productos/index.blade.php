<html>
<head>
<link href="\css\bootstrap.min.css" rel="stylesheet" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<H1> Página de productos </H1>


<table name="prod" id="prod" class="table table-striped">
 <thead>
    <th> Id. </th>
    <th> Código Producto </th>
    <th> Descripción del Producto </th>
    <th> Precio </th>
    <th> Cantidad </th>
 </thead>
 <tbody>
    @foreach($productos as $producto)
        <tr>
            <td> {{$producto->id}} </td>
            <td> {{$producto->codigoProd}} </td>
            <td> {{$producto->descripcionProd}} </td>
            <td> {{$producto->precioProd}} </td>
            <td> <input type="text" id="{{$producto->id}}" name="{{$producto->id}}" size="5" value=0 /> </td>
            <td> <input type="button" value="Pedir" onclick="enviar({{$producto->id}})"/> </td>
        </tr>
    @endforeach
 </tbody>
</table>



<script>
function enviar(valor){
    // alert(valor);
    //console.log($("td").last().prev().text());
    //alert("hola");
    //var dato = $(this).find('td:nth-child(5)').html();
    //alert($(num.toString(valor).val(dato));
    //alert(document.prod.getElementsByName(num.toString(valor)).value);
    $cant=document.getElementById(valor).value;
    //alert($cant);
    // redirigir a otra página
    window.location.href="pedidos?cant="+$cant+"&id="+valor;
}
</script>

</body>



</html>
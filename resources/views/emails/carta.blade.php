<html>

<head>

</head>

<body>

<H1> Solicitud de pedido </H1>
{{$order->vendedor}}
{{$order->cliente}}
<?php $cant=count($order->lineas); ?>

<table>
@for($i = 0; $i < $cant; $i++)
    <tr>
        <td>{{ $order->lineas[$i][0] }} </td>
    </tr>
    <tr>
        <td>{{ $order->lineas[$i][1] }} </td>
    </tr>
    <tr>
        <td>{{ $order->lineas[$i][2] }} </td>
    </tr>
    <tr>
        <td>{{ $order->lineas[$i][3] }} </td>
    </tr>
    <tr>
        <td>{{ $order->lineas[$i][4] }} </td>
    </tr>
    <tr>
        <td>{{ $order->lineas[$i][5] }} </td>
    </tr>


@endfor
</table>
</body>

</html>
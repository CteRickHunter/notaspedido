<html>
<head>

</head>

<body>

<h1> Página principal del Administrador </h1>

<table width="500" border="1">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Categ.</th>
        <th>Correo</th>
        <th>Descuento</th>
        <th>Actualizado</th>
    </tr>

    @if($users)
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{route('user.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->categoria}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->descuento}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>
        @endforeach
    @endif
</table>

</body>


</html>

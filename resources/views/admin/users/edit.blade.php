<html>
<head>

</head>

<body>

<h1> Página para Editar Usuarios </h1>

{!! Form::model($user,['method' => 'PATCH', 'action'=>['AdminUsersController@update', $user->id]]) !!}
    <table>
        <tr>
            <td> {!! Form::label('name', 'Nombre: ') !!} </td>
            <td>{!!Form::text('name') !!}</td>
        </tr>
        <tr>
            <td> {!! Form::label('password', 'Clave: ') !!} </td>
            <td>{!!Form::text('password') !!}</td>
        </tr>
        <tr>
            <td> {!! Form::label('categoria', 'Categoría:') !!} </td>
            <td>{!!Form::text('categoria') !!}</td>
        </tr>
        <tr>
            <td> {!! Form::label('email', 'Correo: ') !!} </td>
            <td>{!!Form::text('email') !!}</td>
        </tr>
        <tr>
            <td> {!! Form::label('verifica', 'Verifica Correo: ') !!} </td>
            <td>{!!Form::text('email_verified_at') !!}</td>
        </tr>
        <tr>
        <td> {!! Form::label('descuento', 'Descuento:') !!} </td>
            <td>{!!Form::number('descuento',30) !!}</td>
        </tr>
        <tr>
        <td> {!! Form::submit('Modificar Usuario') !!} </td>
            <td>{!!Form::reset('Limpiar') !!}</td>
        </tr>
        <tr>
        <td> {!! Form::submit('Eliminar Usuario') !!} </td>
            <td></td>
        </tr>

        
    </table>
   

{!! Form::close() !!}

</body>



</html>

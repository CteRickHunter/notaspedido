<html>
<head>

</head>

<body>

<h1> Página para agregar usuarios </h1>

{!! Form::open(['method' => 'POST', 'action'=>'AdminUsersController@store']) !!}
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
        <td> {!! Form::submit('Crear Usuario') !!} </td>
            <td>{!!Form::reset('Limpiar') !!}</td>
        </tr>


        
    </table>
   

{!! Form::close() !!}

</body>



</html>

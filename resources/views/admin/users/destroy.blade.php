<html>
<head>

</head>

<body>

<h1> Página principal del Administrador </h1>
{!! Form::model($user,['method' => 'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
   
   

{!! Form::close() !!}
</body>



</html>

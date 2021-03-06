@extends('layouts.app')

@section('content')
<H1 class="row justify-content-center">  Ingreso de Pedidos {{ Auth::user()->name }}</H1>
<form>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="card-body">
                    
                    <a href="user/clientes?id={{ Auth::user()->id }}" > <input type="button" class="btn btn-primary btn-block" value="Elegir Cliente"> </a>
                    

                    <?php
                        if (isset($_GET['nombreCli'])) {
                            $nom=$_GET['nombreCli'];
                            
                        }
                        else{
                            $nom="";
                        }
                       
                    
                    ?>
                    <!--
                    if($nom!=null)
                        document.getElementById("nombreCliente").value = {{$nom}}; 
                    endif
                    -->
                    <input type="text" id="nombreCliente" name="nombreCliente" value="{{$nom}}" readonly>
                    


                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Ver si pasa el nombre  -->

                    @if($nom!="")
                        <a href="user/pedidos?cliente={{$nom}}" > <input type="button" class="btn btn-primary btn-block" value="Elegir Productos"> </a>
                    
                    @else
                        <input type="button" class="btn btn-secondary btn-block" value="Elegir Productos">
                    @endif
                    </br></br>
                    <input type=submit class="btn btn-primary btn-block" value="Limpiar datos">
                    
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection

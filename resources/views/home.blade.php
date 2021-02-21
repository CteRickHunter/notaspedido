@extends('layouts.app')

@section('content')
<H1 class="row justify-content-center">  Ingreso de Pedidos </H1>
<form>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="card-body">
                    <a href="user/clientes" > <input type="button" value="Elegir Cliente"> </a>
                    
                    

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

                    <!-- {{ __('You are logged in!') }} -->
                    <a href="user/productos" > <input type="button" value="Elegir Productos"> </a>
                    
                    <div> &nbsp</div>
                    Importe neto:
                    <input type="text" size="12" margin="25px">
                    IVA:
                    <input type="text" size="10">
                    SubTotal:
                    <input type="text" size="12">
                    <div> &nbsp</div>
                    Descuento:
                    <input type="text" size="10">
                    &nbsp &nbsp &nbsp &nbsp &nbsp
                    Imp. Total:
                    <input type="text" size="12">
                    <div> &nbsp</div>
                    <div style="text-align:center;">
                        <a href="user/pedidos" > <input type="button" class="btn btn-primary btn-block" value="Enviar Pedido"> </a>
                        &nbsp &nbsp &nbsp
                        <input type=submit class="btn btn-primary btn-block" value="Limpiar datos">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection

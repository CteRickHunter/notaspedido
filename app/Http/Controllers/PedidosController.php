<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\OrderShipped;
use App\Mail\Order;
use App\Pedido;
use App\Item;
use App\Itempedido;
use App\Producto;
use App\Dato;
use Carbon\Carbon;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recupero el dato del cliente desde la tabla datos
        $registro=Dato::find(1);

        // Si tengo una cantidad elegida de mercadería, la ingreso en Items
        if(isset($_GET['cant'])){

            $items=Item::all();
            $tot=1;
            foreach($items as $it){
                $tot=$tot+1;
    
            }

            $cant=$_GET['cant'];
            $id=$_GET['id'];
            $producto=Producto::findOrFail($id);

            $item= new Item;
            $item->lineaItem=$tot;
            $item->pedido_id=1;
            $item->descripcion=$producto->descripcionProd;
            $item->precioItem=$producto->precioProd;
            $item->cantidadPro=$cant;
            $item->producto_id=$id;
            $item->esBonificado=0;
            $item->save();

            header("Location: pedidos");
            exit();
        }
        

       



        $items=Item::all();
        $tot=0;
        foreach($items as $it){
            $tot=$tot+$it->cantidadPro * $it->precioItem;

        }
        
        return view ('user.pedidos.index',compact("items","tot","registro"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function clientes()
    {
        return redirect('user/pedidos/clientes');

    }

    public function create()
    {
       
        $mensaje=$_GET['nota'];
                

        // Recojo los Datos
        $registro=Dato::find(1);
        $textoMail="";
        $textoVendedor="Pedido Vend".strval($registro->user_id);
        $textoCliente="Cliente: ".$registro->nombreCli;
        $textoMail.="Pedido Nro: ".strval($registro->numPed)."\n";
        $date=Carbon::now(); // Determino fecha y hora
        $textoMail.=$date."\n\n";

        // Generar Pedido e ItemPedido
        $pedido=new Pedido;
        $pedido->cliente_id=$registro->idCli;
        $date=Carbon::now();
        $date=$date->subHour(3);
        $pedido->fechaPed=$date->toDateString();
        $pedido->horaPed=$date->toTimeString();
        
        $pedido->user_id=$registro->user_id;
        $pedido->nombreUsu=""; //Puede agregarse el nombre en tabla "datos"

        $pedido->descuentoPed=0;
        $pedido->transportePed="";
        $pedido->notaPed=$mensaje;

        $pedido->save();

        $ult=Pedido::latest()->first()->id;
                
        $items=Item::all();
        // Preparo acumuladores
        $subtotal=0;
        $total=0;
        $iva=0.21;
        $final=1.21;
       
        $lineas=array(array());
        $i=0;
        foreach($items as $it){
            $itemPed=new Itempedido;
            $itemPed->pedido_id=$ult;
            $itemPed->lineaItem=$it->lineaItem;
            $itemPed->producto_id=$it->producto_id;
            $itemPed->cantidadPro=$it->cantidadPro;
            $itemPed->precioItem=$it->precioItem;
            $itemPed->esBonificado=$it->esBonificado;

            // Calculo valores
            $subtotal=$it->cantidadPro * $it->precioItem;
            $total+=$subtotal;

            //agrego datos al mail
            $lineas[$i][0]=$it->lineaItem;
            $lineas[$i][5]=$it->cantidadPro;
            $lineas[$i][1]=$it->producto_id;
            $lineas[$i][2]=$it->descripcion;
            $lineas[$i][3]=$it->precioItem;
            $lineas[$i][4]=$it->$subtotal;
            
           // $textoMail.=$it->lineaItem." - ". $it->cantidadPro ." - " . $it->producto_id . " - " . $it->descripcion . " - " . $it->precioItem . " - " . $subtotal . "\n";
            $i++;
            $itemPed->save();
            
        }

        // Finalizo datos del mail
        $textoMail.="Neto:    ".$total."\n";
        $textoMail.=" IVA:    ".$total*$iva."\n";
        $textoMail.="Imp.Total:".$total*$final."\n";

        $order = new \stdClass();
        $order->vendedor = $textoVendedor;
        $order->cliente = $textoCliente;
        $order->lineas=$lineas;
        
        //Mail::to($request->user())->send(new OrderShipped($order));
        Mail::to("ocampilongo@yahoo.com.ar")->send(new OrderShipped($order));
      //  Mail::send("emails.carta",$datos,function($info){
       //     $info->to("osvaldocampilongo@gmail.com","Pedidos")->subject("Pedido solicitado");

       // });


        // Model::latest()->get(); toma el ultimo elemento

        // Borrar registro 1 de Item
        DB::table('items')->truncate();
        //$items=Item::all();
        //$items->truncate();
       
        
        // enviar mail a pharmavet@pharmavet.com.ar

        // Volver a la Home (view Home)
        return redirect('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

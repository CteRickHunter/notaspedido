<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pedido;
use App\Item;
use App\Producto;
use App\Dato;

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
        // Generar Pedido e ItemPedido

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

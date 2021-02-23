<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Item;
use App\Producto;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($_GET['cant'])){

            

            $cant=$_GET['cant'];
            $id=$_GET['id'];
            $producto=Producto::findOrFail($id);

            $item= new Item;
            $item->lineaItem=1;
            $item->pedido_id=1;
            $item->descripcion=$producto->descripcionProd;
            $item->precioItem=$producto->precioProd;
            $item->cantidadPro=$cant;
            $item->producto_id=$id;
            $item->esBonificado=0;
            $item->save();

        }
        

       



        $items=Item::all();
        
        return view ('user.pedidos.index',compact("items"));
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
        //
        return view('user/pedidos/create');
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

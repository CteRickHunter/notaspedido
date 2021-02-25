<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dato;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (isset($_GET['nombreCli'])) {
            $registro = Dato::find(1);
            $registro->nombreCli=$_GET['nombreCli'];
            $registro->idCli=$_GET['idCli'];
            $registro->save();

        }


        return view('home');
        //return view ('user.pedidos.index');
    }
}

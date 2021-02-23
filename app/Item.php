<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function producto(){

        return $this->hasOne('App\Producto');

    }
}

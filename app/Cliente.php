<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function confirma($id,$nombre){
        
        // Set session variables
        $_SESSION["ClienteNombre"] = $nombre;
        $_SESSION["ClienteId"] = $id;
        
        // echo "Session variables are set.";
        



    }

}

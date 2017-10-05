<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistazo extends Controller
{
    //
    public function index(){
        $frutas=['uva','pera','manzana','fresa','naranja'];

        $data=array(
            'mensaje'=>'Chi-Chi-Chi-Le-Le-Le',
            'pais'=>'Chile',
            'canasta'=>$frutas
        );
        return view('pack.welcome',$data);
    }
}

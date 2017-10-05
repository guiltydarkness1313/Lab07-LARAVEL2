<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistazo extends Controller
{
    //
    public function index(){
        $data=array(
            'mensaje'=>'Chi-Chi-Chi-Le-Le-Le',
            'pais'=>'Chile'
        );
        return view('pack.welcome',$data);
    }
}

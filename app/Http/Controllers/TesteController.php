<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //Controlador que recebe os parâmetros esperados através da rota
    public function teste($p1, $p2){
        //echo "A soma de $p1 + $p2 = " . ($p1 + $p2);
        //return view('site.teste', ['p1' => $p1, 'p2' => $p2]); #array asociativo
        //return view('site.teste', compact('p1', 'p2')); #método compact
        return view('site.teste')->with('p1', $p1)->with('p2', $p2); #método with() -> parametros: 1: nome da variável na view, 2: variável local
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculoDeIMC;

class ImcController extends Controller
{
    
    public function index() {
        return view('info');
    }

    public function indice() {
        $calculoDeIMC = new CalculoDeIMC();

        $valor = $calculoDeIMC->calcular();

        return view('resultado', ['valor'=>$valor]);
    }
}
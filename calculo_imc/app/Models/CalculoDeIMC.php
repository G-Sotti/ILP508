<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeIMC extends Model
{
    public function calcular() {
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];
        
        $calculoIMC = $peso / ($altura * $altura);

        return round($calculoIMC, 1);

    }
}
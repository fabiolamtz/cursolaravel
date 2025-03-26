<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CursoController extends Controller
{
    public function suma($x, $y)
    {

        return 'la suma es: ' . ($x + $y);
    }


    public function resta($x, $y)
    {
        return 'la resta es: ' . ($x - $y);
    }

    public function multiplicacion($x, $y)
    {
        return 'la multiplicacion es: ' . ($x * $y);
    }

    public function division($x, $y)
    {
        return 'la division es: ' . ($x / $y);
    }

}

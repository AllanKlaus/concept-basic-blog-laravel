<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function index($nome)
    {
        return view('test.index', ['nome'=>$nome]);
    }

    public function notas()
    {
        $notas = [
            0 => 'Nota 1',
            1 => 'Nota 2',
            2 => 'Nota 3',
            3 => 'Nota 4',
            4 => 'Nota 5'
        ];
//        return view('test.notas', ['notas' => $notas]);
        return view('test.notas', compact('notas'));
    }
}

<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;

class IndicadoresPController extends Controller
{
    public function index(){

        return view('indicadores_produccion.home');

    }

    public function index_pyp(){

        return view('indicadores_produccion.homepyp');
    }
}

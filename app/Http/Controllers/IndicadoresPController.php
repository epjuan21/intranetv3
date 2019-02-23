<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;

class IndicadoresPController extends Controller
{

    // Ruta Indicadores de Producción

    public function index(){

        return view('indicadores_produccion.home');

    }
    
    // Ruta Indicadores Medicina General

    public function index_mg(){

        return view('indicadores_produccion.homemg');
    }

    public function index_pyp(){

        return view('indicadores_produccion.homepyp');
    }

    // Ruta Urgencias

    public function index_urg(){

        return view('indicadores_produccion.homeurgencias');
    }

    // Ruta RayosX

    public function index_rayosx(){

        return view('indicadores_produccion.homerayosx');
    }

}

<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CyDController extends Controller
{
    // Ingresos Crecimiento y Desarrollo

    public function cyd_ingresos(){
        return view('indicadores_produccion.cyd.cydIngresos');
    }

    public function cyd_ingresos_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_CYD_11() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }

    // Controles Crecimiento y Desarrollo

    public function cyd_controles(){
        return view('indicadores_produccion.cyd.cydControles');
    }

    public function cyd_controles_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_CYD_12() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

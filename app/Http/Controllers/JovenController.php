<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JovenController extends Controller
{
    // Consulta de Primera Vez por Medico del Joven

    public function consulta_joven(){
        return view('indicadores_produccion.joven.joven');
    }

    public function consulta_joven_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_JOV_07() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

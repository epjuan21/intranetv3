<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdultoController extends Controller
{
    // Consulta de Primera Vez por Medico del Adulto

    public function consulta_adulto(){
        return view('indicadores_produccion.adulto.adulto');
    }

    public function consulta_adulto_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_ADU_05() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

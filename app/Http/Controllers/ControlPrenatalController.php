<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ControlPrenatalController extends Controller
{
    // Consulta de Control Prenatal Por Medico

    public function consulta_control_prenatal(){
        return view('indicadores_produccion.controlprenatal.controlPrenatalConsulta');
    }

    public function consulta_control_prenatal_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_CPN_04() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }

    // Ingreso a Control Prenatal Por Médico

    public function ingreso_control_prenatal(){
        return view('indicadores_produccion.controlprenatal.controlPrenatalIngreso');
    }

    public function ingreso_control_prenatal_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_CPN_05() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

<?php

namespace Intranet\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class PlanificacionFamiliarController extends Controller
{
    // Planificación Familiar de Primera Vez

    public function pfprimeravez(){
        return view('indicadores_produccion.planificacionfamiliar.pfprimeravez');
    }

    public function pfprimeravez_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_PF_17() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }

    // Planificación Familiar Controles

    public function pfcontrol(){
        return view('indicadores_produccion.planificacionfamiliar.pfcontrol');
    }

    public function pfcontrol_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_PF_18() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

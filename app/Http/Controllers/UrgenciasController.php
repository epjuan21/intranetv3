<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UrgenciasController extends Controller
{
    // Número de Consulta de Medicina General en Urgencias

    public function consultas_urgencias(){

        return view('indicadores_produccion.urgencias.consultaUrgencias');
    }

    public function consultas_urgencias_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_URG_19() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }

    // Número total de pacientes clasificados como Triage 2

    public function triaje2(){

        return view('indicadores_produccion.urgencias.urgenciasTriaje2');
    }

    public function triaje2_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_URG_20() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }

     // Número total de procedimientos menores por médico

     public function procedimientos_menores(){

        return view('indicadores_produccion.urgencias.procedimientosMenores');
    }

    public function procedimientos_menores_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_URG_21() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }

     // Pacientes en Observación

     public function pacientes_observacion(){

        return view('indicadores_produccion.urgencias.pacientesObservacion');
    }

    public function pacientes_observacion_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_URG_22() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }

}

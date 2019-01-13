<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VacunacionController extends Controller
{
    // Vacunacion

    public function vacunacion(){
        return view('indicadores_produccion.vacunacion.vacunacion');
    }

    public function vacunacion_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_VAC_02() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

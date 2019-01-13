<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CitologiaController extends Controller
{
    // Citologías Cervico Uterinas Tomadas

    public function citologia(){
        return view('indicadores_produccion.citologia.citologia');
    }

    public function citologia_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_CIT_06() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

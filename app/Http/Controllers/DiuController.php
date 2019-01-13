<?php

namespace Intranet\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class DiuController extends Controller
{
    // Atención Post Parto

    public function diu(){
        return view('indicadores_produccion.diu.diu');
    }

    public function diu_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_DIU_03() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

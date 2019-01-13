<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RecienNacidoController extends Controller
{
    // Atención Recién Nacido

    public function reciennacido(){
        return view('indicadores_produccion.reciennacido.reciennacido');
    }

    public function reciennacido_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_RN_03() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

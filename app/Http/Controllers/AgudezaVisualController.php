<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AgudezaVisualController extends Controller
{
    // Medición o Valoración de la Agudeza Visual

    public function agudeza_visual(){
        return view('indicadores_produccion.agudezavisual.agudezavisual');
    }

    public function agudeza_visual_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_AVI_08() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

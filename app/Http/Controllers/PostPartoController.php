<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostPartoController extends Controller
{
    // Atención Post Parto

    public function postparto(){
        return view('indicadores_produccion.postparto.postparto');
    }

    public function postparto_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_POP_01() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

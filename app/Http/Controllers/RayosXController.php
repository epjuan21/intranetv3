<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;

class RayosXController extends Controller
{
    // Rayos X

    public function rayos_x(){
        return view('indicadores_produccion.rayosx.rayosx');
    }

    public function rayos_x_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_POP_01() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

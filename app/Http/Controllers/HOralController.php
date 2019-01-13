<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HOralController extends Controller
{

    // Sellantes

    public function sellantes(){
        return view('indicadores_produccion.horal.sellantes');
    }

    public function sellantes_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_SELLANTES_09() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json(['datos' => $datos])->setEncodingOptions(JSON_NUMERIC_CHECK);
    }

    // Control de Placa
    
    public function control_placa(){

        return view('indicadores_produccion.horal.controlplaca');
    }

    public function control_placa_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_PLACA_09() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }

    // Fluor Topico

    public function fluor_topico(){
        return view('indicadores_produccion.horal.fluortopico');
    }

    public function fluor_topico_data(){
        
        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_TOP_01() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }

    // Barniz Fluor

    public function barniz_fluor(){
        return view('indicadores_produccion.horal.barnizfluor');
    }

    public function barniz_fluor_data(){
        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_BARNIZ_10() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }
}

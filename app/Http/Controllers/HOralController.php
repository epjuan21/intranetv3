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

    public function sellantes_data($year){

        $datos = DB::select("SELECT CANTIDAD AS data FROM dbo.FUC_SELLANTES_08('$year') ORDER BY MES_ATENCION ASC");
        return response()->json(['datos' => $datos])->setEncodingOptions(JSON_NUMERIC_CHECK);
    }

    public function sellantes_year(){
        
        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_SELLANTES_09()");
        return response()->json(['datos' => $datos])->setEncodingOptions(JSON_NUMERIC_CHECK);
    }

    // Control de Placa
    
    public function control_placa(){

        return view('indicadores_produccion.horal.controlplaca');
    }

    public function control_placa_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_PLACA_09() ORDER BY YEAR_ATENTION");
        return response()->json($datos);
    }

    // Fluor Topico

    public function fluor_topico(){
        return view('indicadores_produccion.horal.fluortopico');
    }

    public function fluor_topico_data(){
        
        $datos = DB::select("SELECT *FROM dbo.FUC_PLACA_08('20170101','20171231') ORDER BY MES_ATENCION ASC");

        return response()->json(['datos' => $datos])->setEncodingOptions(JSON_NUMERIC_CHECK);
    }

    public function barniz_fluor(){
        return view('indicadores_produccion.horal.barnizfluor');
    }
}

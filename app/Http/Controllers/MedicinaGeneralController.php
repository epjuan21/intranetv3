<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MedicinaGeneralController extends Controller
{

    // Medicina General Electiva

    public function med_gen_elect(){

        return view('indicadores_produccion.medicinageneral.medGenEle');
    }

    public function med_gen_elect_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_CME_05() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }

    // Medicina General De Primera Vez

    public function med_gen_pri(){

        return view('indicadores_produccion.medicinageneral.medGenPri');
    }

    public function med_gen_pri_data(){

        $datos = DB::select("SELECT YEAR_ATENTION, MES_ATENCION, CANTIDAD FROM dbo.FUC_CMG_23() ORDER BY YEAR_ATENTION, MES_ATENCION");
        return response()->json($datos);
    }

}

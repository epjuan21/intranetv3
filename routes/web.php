<?php

Route::get('/', 'HomeController@home');

    // Rutas Indicadores de Producción

    Route::get('/IndicadoresProduccion','IndicadoresPController@index')->name('IndicadoresProduccion');

    Route::get('/IndicadoresProduccion/PYP','IndicadoresPController@index_pyp')->name('HomePYP');

    // Rutas Consulta de Medicina General

    Route::get('/IndicadoresProduccion/MedicinaGeneral','IndicadoresPController@index_mg')->name('MedicinaGeneralHome');
    
    // Rutas Urgencias

    Route::get('/IndicadoresProduccion/Urgencias','IndicadoresPController@index_urg')->name('UrgenciasHome');

    // Rutas RayosX

    Route::get('/IndicadoresProduccion/RayosX','IndicadoresPController@index_rayosx')->name('RayosXHome');

    // Medicina General

        // Medicina General Electiva
        
        Route::get('/IndicadoresProduccion/MedicinaGeneralElectiva','MedicinaGeneralController@med_gen_elect')->name('MedicinaGeneralElectiva');
        Route::get('/IndicadoresProduccion/MedicinaGeneralElectivaData','MedicinaGeneralController@med_gen_elect_data');

        // Medicina General De Primera Vez

        Route::get('/IndicadoresProduccion/MedicinaGeneralPrimeraVez','MedicinaGeneralController@med_gen_pri')->name('MedicinaGeneralPrimeraVez');
        Route::get('/IndicadoresProduccion/MedicinaGeneralPrimeraVezData','MedicinaGeneralController@med_gen_pri_data');

    // Urgencias

        // Número de Consulta de Medicina General en Urgencias

        Route::get('/IndicadoresProduccion/ConsultasUrgencias','UrgenciasController@consultas_urgencias')->name('ConsultasUrgencias');
        Route::get('/IndicadoresProduccion/ConsultasUrgenciasData','UrgenciasController@consultas_urgencias_data');

        // Número total de pacientes clasificados como Triage 2

        Route::get('/IndicadoresProduccion/Triaje2','UrgenciasController@triaje2')->name('Triaje2');
        Route::get('/IndicadoresProduccion/Triaje2Data','UrgenciasController@triaje2_data');

        // Número total de procedimientos menores por médico

        Route::get('/IndicadoresProduccion/ProcedimientosMenores','UrgenciasController@procedimientos_menores')->name('ProcedimientosMenores');
        Route::get('/IndicadoresProduccion/ProcedimientosMenoresData','UrgenciasController@procedimientos_menores_data');

        // Pacientes en Observación

        Route::get('/IndicadoresProduccion/PacientesObservacion','UrgenciasController@pacientes_observacion')->name('PacientesObservacion');
        Route::get('/IndicadoresProduccion/PacientesObservacionData','UrgenciasController@pacientes_observacion_data');

    // Rayos X

        // Número de imágenes diagnósticas tomadas

        Route::get('/IndicadoresProduccion/ImagenesDiagnosticas','RayosXController@rayos_x')->name('ImagenesDiagnosticas');
        Route::get('/IndicadoresProduccion/ImagenesDiagnosticasData','RayosXController@rayos_x_data');

    // Higiene Oral

        // Sellants

        Route::get('/IndicadoresProduccion/Sellantes','HOralController@sellantes')->name('Sellantes');
        Route::get('/IndicadoresProduccion/HOral/SellantesData','HOralController@sellantes_data');

        // Control de Placa

        Route::get('/IndicadoresProduccion/ControlPlaca','HOralController@control_placa')->name('ControlPlaca');
        Route::get('/IndicadoresProduccion/HOral/ControlPlacaData','HOralController@control_placa_data');

        // Flúor Tópico

        Route::get('/IndicadoresProduccion/FluorTopico','HOralController@fluor_topico')->name('FluorTopico');
        Route::get('/IndicadoresProduccion/HOral/FluorTopicoData','HOralController@fluor_topico_data');

        // Barniz de Flúor

        Route::get('/IndicadoresProduccion/BarnizFluor','HOralController@barniz_fluor')->name('BarnizFluor');
        Route::get('/IndicadoresProduccion/HOral/BarnizFluorData','HOralController@barniz_fluor_data');

    // Vacunación

        // Biologicos Aplicados

        Route::get('/IndicadoresProduccion/Vacunacion','VacunacionController@vacunacion')->name('Vacunacion');
        Route::get('/IndicadoresProduccion/VacunacionData','VacunacionController@vacunacion_data');

    // Atención Post Parto

        // Atención Post Parto
        Route::get('/IndicadoresProduccion/PostParto','PostPartoController@postparto')->name('PostParto');
        Route::get('/IndicadoresProduccion/PostPartoData','PostPartoController@postparto_data');

    // Atención Recien Nacido

        // Atención Recien Nacido
        Route::get('/IndicadoresProduccion/RecienNacido','RecienNacidoController@reciennacido')->name('RecienNacido');
        Route::get('/IndicadoresProduccion/RecienNacidoData','RecienNacidoController@reciennacido_data');
        

    // Planificación Familiar

        // Consultas de Planificación Familiar de Primera Vez
        Route::get('/IndicadoresProduccion/PlanificacionFamiliarPrimeraVez','PlanificacionFamiliarController@pfprimeravez')->name('PlanificacionFamiliarPrimeraVez');
        Route::get('/IndicadoresProduccion/PlanificacionFamiliarPrimeraVezData','PlanificacionFamiliarController@pfprimeravez_data');

        // Consultas de Planificación Familiar de Control
        Route::get('/IndicadoresProduccion/PlanificacionFamiliarControl','PlanificacionFamiliarController@pfcontrol')->name('PlanificacionFamiliarControl');
        Route::get('/IndicadoresProduccion/PlanificacionFamiliarControlData','PlanificacionFamiliarController@pfcontrol_data');

    
    // Dispositivo Intrauterino

        // Inserción y Retiro de Dispositivo Intrauterino

        Route::get('/IndicadoresProduccion/Dispositivo','DiuController@diu')->name('Diu');
        Route::get('/IndicadoresProduccion/DispositivoData','DiuController@diu_data');

    // Crecimiento y Desarrollo
       
        // Ingresos Crecimiento y Desarrollo

        Route::get('/IndicadoresProduccion/CyDIngresos','CyDController@cyd_ingresos')->name('CYDIngresos');
        Route::get('/IndicadoresProduccion/CyDIngresosData','CyDController@cyd_ingresos_data');

        // Controles Crecimiento y Desarrollo
        Route::get('/IndicadoresProduccion/CyDControles','CyDController@cyd_controles')->name('CYDControles');
        Route::get('/IndicadoresProduccion/CyDControlesData','CyDController@cyd_controles_data');


    // Consulta Joven

        // Consulta de Primera Vez por Medico del Joven
        Route::get('/IndicadoresProduccion/ConsultaJoven','JovenController@consulta_joven')->name('ConsultaJoven');
        Route::get('/IndicadoresProduccion/ConsultaJovenData','JovenController@consulta_joven_data');

    // Control Prenatal

        // Consulta de Control Prenatal Por Medico
        Route::get('/IndicadoresProduccion/ConsultaControlPrenatal','ControlPrenatalController@consulta_control_prenatal')->name('ConsultaControlPrenatal');
        Route::get('/IndicadoresProduccion/ConsultaControlPrenatalData','ControlPrenatalController@consulta_control_prenatal_data');

        // Ingreso a Control Prenatal Por Médico
        Route::get('/IndicadoresProduccion/IngresoControlPrenatal','ControlPrenatalController@ingreso_control_prenatal')->name('IngresoControlPrenatal');
        Route::get('/IndicadoresProduccion/IngresoControlPrenatalData','ControlPrenatalController@ingreso_control_prenatal_data');

    // Consulta Adulto

        // Consulta de Primera Vez por Medico del Adulto
        Route::get('/IndicadoresProduccion/ConsultaAdulto','AdultoController@consulta_adulto')->name('ConsultaAdulto');
        Route::get('/IndicadoresProduccion/ConsultaAdultoData','AdultoController@consulta_adulto_data');
    
    // Citologías

        // Citologías Cervico Uterinas Tomadas
        Route::get('/IndicadoresProduccion/Citologias','CitologiaController@citologia')->name('Citologia');
        Route::get('/IndicadoresProduccion/CitologiasData','CitologiaController@citologia_data');

    // Agudeza Visual

        // Medición o Valoración de la Agudeza Visual
        Route::get('/IndicadoresProduccion/AgudezaVisual','AgudezaVisualController@agudeza_visual')->name('AgudezaVisual');
        Route::get('/IndicadoresProduccion/AgudezaVisualData','AgudezaVisualController@agudeza_visual_data');
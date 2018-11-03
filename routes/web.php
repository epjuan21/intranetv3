<?php

Route::get('/', 'HomeController@home');


// Rutas Indicadores de Producción

Route::get('/IndicadoresProduccion','IndicadoresPController@index')->name('IndicadoresProduccion');

Route::get('/IndicadoresProduccion/PYP','IndicadoresPController@index_pyp')->name('HomePYP');

// Higiene Oral

    // Sellants

    Route::get('/IndicadoresProduccion/HOral/Sellantes','HOralController@sellantes')->name('Sellantes');
    Route::get('/IndicadoresProduccion/HOral/SellantesData','HOralController@sellantes_data');

    // Control de Placa

    Route::get('/IndicadoresProduccion/HOral/ControlPlaca','HOralController@control_placa')->name('ControlPlaca');
    Route::get('/IndicadoresProduccion/HOral/ControlPlacaData','HOralController@control_placa_data');

    // Flúor Tópico

    Route::get('/IndicadoresProduccion/HOral/FluorTopico','HOralController@fluor_topico')->name('FluorTopico');
    Route::get('/IndicadoresProduccion/HOral/FluorTopicoData','HOralController@fluor_topico_data');

    // Barniz de Flúor
    Route::get('/IndicadoresProduccion/HOral/BarnizFluor','HOralController@barniz_fluor')->name('BarnizFluor');
    Route::get('/IndicadoresProduccion/HOral/BarnizFluorData','HOralController@barniz_fluor_data');
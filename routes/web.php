<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/{vista}', 'crud\crudController@index', function($vista){
});

Route::get('/{vista}/{id}', 'crud\crudController@ver', function($vista, $id){
});

Route::post('/filtrado', 'crud\crudController@verFiltrado', function(){
});


/*
    Route::get('/php', function () {
        
        $array = [
                    ['Colombia', 'Mexico', 'EEUU', 'Japon'],
                    ['Peso colombiano', 'Peso mexicano', 'Dolar', 'Yen'],
                    [0.00023, 0.040, 0.83, 0.0078]
                ];
        
        $pais = 'Japon';
        $text = '';

        for ($i=0; $i < count($array); $i++) { 
            for ($j=0; $j < count($array[$i]); $j++) { 
                if($pais == $array[$i][$j]){
                    $text = $text. '1 '. $array[1][$j]. ' equivale a '. $array[2][$j]. ' Euros';
                    return $text;
                    break;
                }
            }
        }
    });
*/
<?php

namespace App\Http\Controllers\crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\tbalojamiento;
use App\model\tbrecorrido;
use App\model\tbtour;


class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($vista){

        if ($vista == 'alojamientos') {
            $table['datos'] = tbalojamiento::get();
            return view($vista, $table);
        } elseif ($vista == 'recorridos') {
            $table['datos'] = tbrecorrido::get();
            return view($vista, $table);
        } elseif ($vista == 'tours') {
            $table['datos'] = tbtour::get();
            return view($vista, $table);
        }
        
    }

    
    public function ver($vista, $id){
        
        if ($vista == 'alojamientos') {
            $data['datos'] = tbalojamiento::find($id);
            return view('verAlojamientos', $data);
        } elseif ($vista == 'recorridos') {
            $table['datos'] = tbrecorrido::find($id);
            return view('verRecorridos', $table);
        } elseif ($vista == 'tours') {
            $table['datos'] = tbtour::find($id);
            return view('verTours', $table);
        }
    }

    public function verFiltrado(Request $request){
        $precioMenor;
        $precioMayor;

        if ($request -> flexRadioDefault == '1') {
            $precioMenor = 30000;
            $precioMayor = 40000;
        }elseif ($request -> flexRadioDefault == '2'){
            $precioMenor = 50000;
            $precioMayor = 60000;
        }elseif($request -> flexRadioDefault == '3'){
            $precioMenor = 70000;
            $precioMayor = 80000;
        }elseif($request -> flexRadioDefault == '4'){
            $precioMenor = 90000;
            $precioMayor = 100000;
        }

        if ($request -> categoria == '1') {
            $table['datos'] = tbalojamiento::whereBetween("precio", [$precioMenor,$precioMayor])->get();
            $titulo['title']="Alojamientos";
            return view('filtrado',$table,$titulo);
        }elseif ($request -> categoria == '2'){
            $table['datos'] = tbrecorrido::whereBetween("precio", [$precioMenor,$precioMayor])->get();
            $titulo['title']="Recorridos";
            return view('filtrado',$table,$titulo);
        }elseif($request -> categoria == '3'){
            $table['datos'] = tbtour::whereBetween("precio", [$precioMenor,$precioMayor])->get();
            $titulo['title']="Tours";
            return view('filtrado',$table,$titulo);
        }

        //return ($cate.''.$precioMenor.''.$precioMayor);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

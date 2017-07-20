<?php

namespace App\Http\Controllers;

use App\TCategoria;
use App\TPaquete;
use App\TPaqueteDestino;
use App\TPaqueteIncluyeIcono;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 1)->get();
        $paquete_f = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 2)->orwhere('estado', 5)->get();
        $paquete_mg = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 3)->get();
        $paquete_m = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 4)->get();
        $paquete_h = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 5)->get();
        $categoria = TCategoria::get();
        $incluye_i = TPaqueteIncluyeIcono::with('paquete')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();


        return view('page.home', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'paquete_f'=>$paquete_f, 'paquete_mg'=>$paquete_mg, 'paquete_m'=>$paquete_m, 'paquete_h'=>$paquete_h, 'categoria'=>$categoria, 'incluye_i'=>$incluye_i]);
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
    public function show($titulo)
    {
        $title = str_replace('-', ' ', strtoupper($titulo));
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $paquete = TPaquete::with('itinerario','paquetes_destinos', 'precio_paquetes')->where('titulo', $title)->get();
        $incluye_i = TPaqueteIncluyeIcono::with('paquete')->get();
        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos,'incluye_i'=>$incluye_i]);
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

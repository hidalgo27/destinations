<?php

namespace App\Http\Controllers;

use App\TDestino;
use App\TImagenTour;
use App\TItinerarioTour;
use App\TTour;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('Peruvian Destinations Tours');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('https://peruviandestinations.com');
//        SEOMeta::addKeyword([]);

        $tours = TTour::all();
        return view('page.tours', ['tours'=>$tours]);
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
    public function destinations($title)
    {
        $destination = str_replace('-', ' ', $title);
        SEOMeta::setTitle('Peruvian Destinations | '.ucwords($destination).' Tours');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('https://peruviandestinations.com');
//        SEOMeta::addKeyword([]);

        $destino = TDestino::get()->where('nombre', strtoupper($destination));
        $imagen = TImagenTour::all();
        $tours = TTour::get()->where('ubicacion', $destination);
        return view('page.tours-show', ['tours'=>$tours, 'imagen'=>$imagen, 'destino'=>$destino]);
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
    public function show($title)
    {
        $title = str_replace('-', ' ', strtoupper($title));
        SEOMeta::setTitle('Peruvian Destinations | '.ucwords(strtolower($title)));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('https://peruviandestinations.com');
//        SEOMeta::addKeyword([]);
        $imagen = TImagenTour::all();
        $tours = TTour::with('itinerario_tours')->where('titulo', $title)->get();
//        dd($tours);
        return view('page.tours-itinerary', ['tours'=>$tours, 'imagen'=>$imagen]);
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

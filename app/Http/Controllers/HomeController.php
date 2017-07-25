<?php

namespace App\Http\Controllers;

use App\TCategoria;
use App\TDestino;
use App\TPaquete;
use App\TPaqueteCategoria;
use App\TPaqueteDestino;
use App\TPaqueteIncluyeIcono;
use App\TTour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function packages()
    {
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $categoria = TCategoria::get();
        $paquete_categoria = TPaqueteCategoria::with('paquete')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $incluye_i = TPaqueteIncluyeIcono::with('paquete')->get();
        return view('page.packages',['paquete'=>$paquete,'categoria'=>$categoria, 'paquete_categoria'=>$paquete_categoria, 'paquete_destinos'=>$paquete_destinos, 'incluye_i'=>$incluye_i]);
    }

    public function destinations()
    {
        $destinos = TDestino::get();
        return view('page.destinations', ['destinos'=>$destinos]);
    }
    public function destinations_sow($title)
    {
        $destinations = str_replace('-', ' ', ucwords(strtolower($title)));

//        $destinations = 'Inca Trail';

        $destinos = TDestino::get();
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $incluye_i = TPaqueteIncluyeIcono::with('paquete')->get();
        $paquetes_de = TPaqueteDestino::with(['destinos'=>function($query) use ($destinations) { $query->where('nombre', $destinations);}])->get();


        $categoria = TCategoria::get();
        $paquete_categoria = TPaqueteCategoria::with('paquete')->get();
//        return view('page.category',['categoria'=>$categoria, 'paquete_categoria'=>$paquete_categoria, 'paquete_destinos'=>$paquete_destinos, 'incluye_i'=>$incluye_i]);


        $destination = str_replace('-', ' ', $title);
        $tours = TTour::get()->where('ubicacion', $destination);


//        dd($paquetes_de);
        return view('page.destinations-show', ['paquetes_de'=>$paquetes_de, 'paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'destinos'=>$destinos, 'title'=>$destinations, 'incluye_i'=>$incluye_i, 'categoria'=>$categoria, 'paquete_categoria'=>$paquete_categoria, 'page.tours-show', 'tours'=>$tours]);
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

    public function about()
    {
        return view('page.about');
    }
    public function testimonials()
    {
        return view('page.testimonials');
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

    public function inquire()
    {
        $from = 'hidalgochpnce@gmail.com';

        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $country = $_POST['txt_country'];
        $date = $_POST['txt_date'];
        $travelers = $_POST['txt_travelers'];
        $days = $_POST['txt_days'];
        $message = $_POST['txt_message'];

//        dd($category, $number, $days, $date, $description, $name, $email, $phone);

        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('Inquire Peruvian Destinations')
                    /*->attach('ruta')*/
                    ->from('info@peruviandestinations.com', 'Peruvian Destinations');
            });


            Mail::send(['html' => 'notifications.page.admin-form-design'], [
                'name' => $name,
                'email' => $email,
                'country' => $country,
                'date' => $date,
                'travelers' => $travelers,
                'days' => $days,
                'message' => $message
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'Peruvian Destinations')
                    ->subject('Inquire peruviandestinations.com')
                    /*->attach('ruta')*/
                    ->from('info@peruviandestinations.com', 'peruviandestinations.com');
            });


            return 'Thank you.';

        }
        catch (Exception $e){
            return $e;
        }

//        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }
}

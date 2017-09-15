<?php

namespace App\Http\Controllers;

use App\TCategoria;
use App\TDestino;
use App\TPaquete;
use App\TPaqueteCategoria;
use App\TPaqueteDestino;
use App\TPaqueteIncluyeIcono;
use App\TTour;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
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
        SEOMeta::setTitle('Go to peru - Travel packages to peru - Peru vacation - Machu picchu tours - travel agency - Peruvian Destinations');
        SEOMeta::setDescription('Find your dream trip to an amazing adventure to Peru, You will get special discount from this local provider to your new experience.');
        SEOMeta::setCanonical('https://peruviandestinations.com');
        SEOMeta::addKeyword(['peru travel, peru travel package, experience peru, peruvian destinations, peru tours, peru travel agent, peru travel agency, cuzco travel pacakge, cusco tours, lima, ica, peru, Perú, machu picchu tours, Machu picchu package, Machu Picchu vacation, peru vacation, peru local tour operator, peru local travel agency, peru tourism, tour package to peru, visit machu picchu, visit peru, peru tours']);

        OpenGraph::setDescription('Find your dream trip to an amazing adventure to Peru, You will get special discount from this local provider to your new experience.');
        OpenGraph::setTitle('Go to peru - Travel packages to peru - Peru vacation - Machu picchu tours - travel agency - Peruvian Destinations');
        OpenGraph::setUrl('https://peruviandestinations.com');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://peruviandestinations.com/images/slider/slider-2.jpg');
        \Twitter::setTitle('Go to peru - Travel packages to peru - Peru vacation - Machu picchu tours - travel agency - Peruvian Destinations');
//        \Twitter::setSite('@LuizVinicius73');

//        Twitter::setTitle('Homepage');
//        Twitter::setSite('@LuizVinicius73');

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
        SEOMeta::setTitle('Peruvian Destinations Packages');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('https://peruviandestinations.com');
//        SEOMeta::addKeyword([]);

        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $categoria = TCategoria::get();
        $paquete_categoria = TPaqueteCategoria::with('paquete')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $incluye_i = TPaqueteIncluyeIcono::with('paquete')->get();
        return view('page.packages',['paquete'=>$paquete,'categoria'=>$categoria, 'paquete_categoria'=>$paquete_categoria, 'paquete_destinos'=>$paquete_destinos, 'incluye_i'=>$incluye_i]);
    }

    public function destinations()
    {
        SEOMeta::setTitle('Peruvian Destinations');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('https://peruviandestinations.com');
//        SEOMeta::addKeyword([]);

        $destinos = TDestino::get();
        return view('page.destinations', ['destinos'=>$destinos]);
    }
    public function destinations_sow($title)
    {
        $destinations = str_replace('-', ' ', ucwords(strtolower($title)));

        SEOMeta::setTitle('Peruvian Destinations | '.$destinations);
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('https://peruviandestinations.com');
//        SEOMeta::addKeyword([]);

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
        SEOMeta::setTitle('Peruvian Destinations | About Us');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('https://peruviandestinations.com');
        return view('page.about');
    }
    public function testimonials()
    {
        SEOMeta::setTitle('Peruvian Destinations | Testimonials');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('https://peruviandestinations.com');

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
        SEOMeta::setTitle('Peruvian Destinations | '.ucwords(strtolower($title)));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('https://peruviandestinations.com');

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
        $from = 'mhmarcoale@gmail.com';

        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $country = $_POST['txt_country'];
        $date = $_POST['txt_date'];
        $travelers = $_POST['txt_travelers'];
        $days = $_POST['txt_days'];
        $message2 = $_POST['txt_message'];

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
                'message2' => $message2
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

    public function design()
    {
        $from = 'mhmarcoale@gmail.com';

        $destinations = $_POST['txt_destinations'];
        $category = $_POST['txt_category'];
        $duration = $_POST['txt_duration'];
        $number = $_POST['txt_number'];


        $date = $_POST['txt_date'];
        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $tel = $_POST['txt_tel'];
        $comment = $_POST['txt_comment'];


        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('Inquire Peruvian Destinations')
                    /*->attach('ruta')*/
                    ->from('info@peruviandestinations.com', 'Peruvian Destinations');
            });


            Mail::send(['html' => 'notifications.page.admin-form-design-bottom'], [
                'destinations' => $destinations,
                'category' => $category,
                'duration' => $duration,
                'number' => $number,
                'date' => $date,
                'name' => $name,
                'email' => $email,
                'tel' => $tel,
                'comment' => $comment
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

    public function tours()
    {
        $from = 'mhmarcoale@gmail.com';

        $tours = $_POST['txt_tours'];
        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $tel = $_POST['txt_tel'];
        $comment = $_POST['txt_comment'];


        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('Inquire Peruvian Destinations')
                    /*->attach('ruta')*/
                    ->from('info@peruviandestinations.com', 'Peruvian Destinations');
            });


            Mail::send(['html' => 'notifications.page.admin-form-tours'], [
                'tours' => $tours,
                'name' => $name,
                'email' => $email,
                'tel' => $tel,
                'comment' => $comment
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

    public function packages_form()
    {
        $from = 'mhmarcoale@gmail.com';

        $package = $_POST['txt_package'];
        $category = $_POST['txt_category'];
        $number = $_POST['txt_number'];

        $date = $_POST['txt_date'];
        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $tel = $_POST['txt_tel'];
        $comment = $_POST['txt_comment'];

        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('Inquire Peruvian Destinations')
                    /*->attach('ruta')*/
                    ->from('info@peruviandestinations.com', 'Peruvian Destinations');
            });


            Mail::send(['html' => 'notifications.page.admin-form-package'], [
                'package' => $package,
                'category' => $category,
                'number' => $number,
                'date' => $date,
                'name' => $name,
                'email' => $email,
                'tel' => $tel,
                'comment' => $comment
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

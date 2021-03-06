<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TTour extends Model
{
    protected $table = "ttours";

    public function itinerario_tours()
    {
        return $this->hasMany(TItinerarioTour::class, 'idtours');
    }

    public function imagen_tours()
    {
        return $this->hasMany(TImagenTour::class, 'idtours');
    }
}

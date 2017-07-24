<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TItinerarioTour extends Model
{
    protected $table = "titinerariotours";

    public function tours()
    {
        return $this->belongsTo(TTour::class, 'idtours');
    }
}

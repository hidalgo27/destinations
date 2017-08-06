<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TImagenTour extends Model
{
    protected $table = "timagentours";

    public function tours()
    {
        return $this->belongsTo(TTour::class, 'idtours');
    }
}

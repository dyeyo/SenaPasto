<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteAprendicesFichas extends Model
{
    protected $fillable=['ficha','TipoDocumento', 'NumeroDocumento', 'nombres', 'apellidos',
        'celular', 'correo', 'estado',
        ];

   /* public function reporteAprendicesFichasHeader()
    {
        return $this->belongsTo('App\ReporteAprendicesFichasHeader');
    }*/
}

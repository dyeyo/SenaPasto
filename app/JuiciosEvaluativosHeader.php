<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JuiciosEvaluativosHeader extends Model
{
    protected $fillable=['fechaReporte', 'fichaCaracterizacion', 'codigo','estadoFicha' ,'version', 'denominacion',
        'fechaInicio', 'fechaFin', 'modalidadFormacion', 'regional', 'centroFormacion'];

    public function reportesJuiciosEvaluativos()
    {
        return $this->hasMany('App\JuiciosEvaluativos');
    }
}

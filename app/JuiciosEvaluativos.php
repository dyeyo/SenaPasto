<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JuiciosEvaluativos extends Model
{
    protected $fillable=['TipoDocumento','NumeroDocumento', 'nombres', 'apellidos','estado', 'competencia',
                        'resultadoAprendizaje', 'juicioEvaluacion', 'funcionarioRegistroJuicioEvaluativo',
                        'juicios_evaluativos_header_id'];

    public function juiciosEvaluativosHeader()
    {
        return $this->belongsTo('App\JuiciosEvaluativosHeader');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JuiciosEvaluativosHeader extends Model
{
    protected $fillable=['TipoDocumento','NumeroDocumento', 'nombres', 'apellidos', 'estado', 'competencia',
        'resultadoAprendizaje', 'juicioEvaluacion', 'funcionarioRegistroJuicioEvaluativo'];
}

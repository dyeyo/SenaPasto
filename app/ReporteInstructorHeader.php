<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteInstructorHeader extends Model
{
   protected $fillable=['ficha', 'nombrePrograma', 'centro','municipio', 'horasTotalesProgramadas',
       'horasTotalesEjecutadas', 'horasTotalesPendientes', 'fechaInicio', 'fechaFin'];

   public function reportesInstructores()
   {
        return $this->hasMany('App\ReportesInstructores');
   }
}

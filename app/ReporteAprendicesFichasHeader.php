<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteAprendicesFichasHeader extends Model
{
   protected $fillable=['fichaCaracterizacion', 'estado', 'fechaReporte'];

   public function reporteAprendicesFicha(){
       return $this->hasMany('App\ReporteAprendicesFichas');
   }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportesInstructores extends Model
{
    protected $fillable=['NombreInstructor', 'ApellidoInstructor', 'EstadoInstructor',
        'Competencia','FechaInicioProgramacion', 'FechaFinProgramacion',
        'HorasProgramadas','reporte_instructor_header_id'];

    public function reporteInstructorHeader()
    {
        return $this->belongsTo('App\ReporteInstructorHeader');
    }


}

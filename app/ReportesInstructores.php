<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportesInstructores extends Model
{
    protected $fillable=['NombreInstructor', 'ApellidoInstructor', 'EstadoInstructor', 'Competencia',
        'FechaInicioProgramacion', 'FechaFinProgramacion', 'HorasProgramadas','codigoFicha'];
}

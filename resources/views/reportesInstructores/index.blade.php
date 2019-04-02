@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{route('crearReporteInstructores')}}">AGREGAR </a>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabla" data-target="table"
                               data-url="{{url('/getdata')}}"
                               data-sort-name="stargazers_count"
                               data-sort-orden="desc"
                               data-show-columns="true"
                               data-toolbar="#toolbar"
                               data-pagination="true"
                               data-show-export="true"
                               data-search="true">
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $('#tabla').bootstrapTable({

                columns:[
                    {
                        field: 'ficha',
                        title: 'Ficha',
                    },
                    {
                        field: 'nombrePrograma',
                        title: 'Nombre del Programa',
                    },
                    {
                        field: 'HorasProgramadas',
                        title: 'Horas Programadas',
                    },
                    {
                        field: 'NombreInstructor',
                        title: 'Nombre',
                    },
                    {
                        field: 'ApellidoInstructor',
                        title: 'Apellido',
                    },{
                        field: 'EstadoInstructor',
                        title: 'Estado del Instructor',
                    },
                    {
                        field: 'Competencia',
                        title: 'Competencia',
                    },
                    {
                        field: 'FechaInicioProgramacion',
                        title: 'Fecha Inicio del Programacion',
                    },
                    {
                        field: 'FechaFinProgramacion',
                        title: 'Fecha Fin del Programacion',
                    },
                    {
                        field: 'HorasProgramadas',
                        title: 'Horas Programadas',
                    },
                ]
            });
        });

    </script>

@endsection

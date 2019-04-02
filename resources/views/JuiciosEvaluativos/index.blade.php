@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{route('crearimportarJuicio')}}">AGREGAR </a>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div  class="table-responsive">
                        <table class="table table-striped" id="tabla" data-target="table"
                               data-url="{{url('/getdataJuicio')}}"
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
                        field: 'fechaReporte',
                        title: 'Fecha Reporte'
                    },
                    {
                        field: 'estadoFicha',
                        title: 'Estado Ficha'
                    },
                    {
                        field: 'modalidadFormacion',
                        title: 'Modalidad de Formacion'
                    },
                    {
                        field: 'fechaReporte',
                        title: 'Fecha Reporte'
                    },
                    {
                        field: 'NumeroDocumento',
                        title: 'Numero de Documento'
                    },
                    {
                        field: 'nombres',
                        title: 'Nombre',
                    },
                    {
                        field: 'apellidos',
                        title: 'Apellidos',
                    },
                    {
                        field: 'estado',
                        title: 'Estado',
                    },
                    {
                        field: 'competencia',
                        title: 'Competencia',
                    },
                    {
                        field: 'resultadoAprendizaje',
                        title: 'Resultado Aprendizaje',
                    },
                    {
                        field: 'juicioEvaluacion',
                        title: 'Juicio de Evaluacion',
                    }

                ]
            });
        });

    </script>

@endsection
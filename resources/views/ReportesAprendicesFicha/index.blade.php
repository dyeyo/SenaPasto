@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{route('crearReporteAprendicesFicha')}}">AGREGAR </a>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div  class="table-responsive">
                        <table class="table table-striped" id="tabla">
                            <tr>
                                <th>TipoDocumento</th>
                                <th>NumeroDocumento</th>
                                <th>nombres</th>
                                <th>apellidos</th>
                                <th>estado</th>
                                <th>competencia</th>
                                <th>resultadoAprendizaje</th>
                                <th>juicioEvaluacion</th>
                            </tr>
                            @foreach($juiciosEvaluativos  as $reporte)
                                <tr>
                                    <td>{{$reporte->TipoDocumento}}</td>
                                    <td>{{$reporte->NumeroDocumento}}</td>
                                    <td>{{$reporte->nombres}}</td>
                                    <td>{{$reporte->apellidos}}</td>
                                    <td>{{$reporte->estado}}</td>
                                    <td>{{$reporte->competencia}}</td>
                                    <td>{{$reporte->resultadoAprendizaje}}</td>
                                    <td>{{$reporte->juicioEvaluacion}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
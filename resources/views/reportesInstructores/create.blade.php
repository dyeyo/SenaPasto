@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="links  justify-content-between">
                <form method="post" action="{{route('importar')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="input-group">
                        <label class="input-group-btn">
                            <span class="btn btn-primary">
                                Browse&hellip; <input type="file" name="excel" id="excel" style="display: none;" multiple>
                            </span>
                        </label>
                        <input type="text" class="form-control" readonly style="margin-top: 11px;">
                    </div>
                    <div class="input-group">
                        <label for="ficha">Codigo Ficha</label>
                        <input class="form-control" type="text" name="ficha" id="ficha" >
                    </div>
                    <div class="input-group">
                        <label for="nombrePrograma">Nombre Programa</label>
                        <input class="form-control" type="text" name="nombrePrograma" id="nombrePrograma">
                    </div>
                    <div class="input-group">
                        <label for="centro">Centro</label>
                        <input class="form-control" type="text" name="centro" id="centro">
                    </div>
                   {{-- <div class="input-group">
                        <label for="Municipio">Municipio</label>
                        <input class="form-control" type="text" name="Municipio" id="Municipio">
                    </div>--}}
                    <div class="input-group">
                        <label for="horasTotalesProgramadas">Total de horas programadas</label>
                        <input class="form-control" type="text" name="horasTotalesProgramadas" id="horasTotalesProgramadas">
                    </div>
                    <div class="input-group">
                        <label for="horasTotalesEjecutadas">Total de horas ejecutadas</label>
                        <input class="form-control" type="text" name="horasTotalesEjecutadas" id="horasTotalesEjecutadas">
                    </div>
                    <div class="input-group">
                        <label for="horasTotalesPendientes">Total de horas pendientes</label>
                        <input class="form-control" type="text" name="horasTotalesPendientes" id="horasTotalesPendientes">
                    </div>
                    <div class="input-group">
                        <label for="fechaInicio">Fecha Inicio Ficha</label>
                        <input class="form-control" type="date" name="fechaInicio" id="fechaInicio">
                    </div>
                    <div class="input-group">
                        <label for="fechaFin">Fecha Fin Ficha</label>
                        <input class="form-control" type="date" name="fechaFin" id="fechaFin">
                    </div>
                    {{--<div class="input-group">--}}
                        {{--<label for="FechaFinFicha">Fecha Fin Ficha</label>--}}
                        {{--<input class="form-control" type="hidden" name="idFicha" id="idFicha" value="1">--}}
                    {{--</div>--}}
                    <div class="input-group">
                        <input type="submit" class="btn btn-success" value="Enviar" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
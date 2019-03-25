@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="links  justify-content-between">
                <form method="post" action="{{url('importar')}}" enctype="multipart/form-data">
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
                        <label for="CodigoFicha">Codigo Ficha</label>
                        <input class="form-control" type="text" name="CodigoFicha" id="CodigoFicha">
                    </div>
                    <div class="input-group">
                        <label for="NombrePrograma">Nombre Programa</label>
                        <input class="form-control" type="text" name="NombrePrograma" id="NombrePrograma">
                    </div>
                    <div class="input-group">
                        <label for="Centro">Centro</label>
                        <input class="form-control" type="text" name="Centro" id="Centro">
                    </div>
                    <div class="input-group">
                        <label for="Municipio">Municipio</label>
                        <input class="form-control" type="text" name="Municipio" id="Municipio">
                    </div>
                    <div class="input-group">
                        <label for="Totaldehorasprogramadas">Total de horas programadas</label>
                        <input class="form-control" type="text" name="Totaldehorasprogramadas" id="Totaldehorasprogramadas">
                    </div>
                    <div class="input-group">
                        <label for="Totaldehorasejecutadas">Total de horas ejecutadas</label>
                        <input class="form-control" type="text" name="Totaldehorasejecutadas" id="Totaldehorasejecutadas">
                    </div>
                    <div class="input-group">
                        <label for="Totaldehoraspendientes">Total de horas pendientes</label>
                        <input class="form-control" type="text" name="Totaldehoraspendientes" id="Totaldehoraspendientes">
                    </div>
                    <div class="input-group">
                        <label for="FechaInicioFicha">Fecha Inicio Ficha</label>
                        <input class="form-control" type="date" name="FechaInicioFicha" id="FechaInicioFicha">
                    </div>
                    <div class="input-group">
                        <label for="FechaFinFicha">Fecha Fin Ficha</label>
                        <input class="form-control" type="date" name="FechaFinFicha" id="FechaFinFicha">
                    </div>
                    <div class="input-group">
                        <input type="submit" class="btn btn-success" value="Enviar" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
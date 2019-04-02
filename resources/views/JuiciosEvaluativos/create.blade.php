@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="links container  justify-content-between">
                <form method="post" action="{{url('importarJuicio')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <H2>JUICIOS EVALUATIVOS</H2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fechaReporte">Fecha del Reporte</label>
                                <input class="form-control" type="date" name="fechaReporte" id="fechaReporte">
                            </div>
                            <div class="form-group">
                                <label for="fichaCaracterizacion">Ficha Caracterizacion</label>
                                <input class="form-control" type="text" name="fichaCaracterizacion" id="fichaCaracterizacion">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fechaReporte">Fecha del Reporte</label>
                                <input class="form-control" type="date" name="fechaReporte" id="fechaReporte">
                            </div>
                            <div class="form-group">
                                <label for="fichaCaracterizacion">Ficha Caracterizacion</label>
                                <input class="form-control" type="text" name="fichaCaracterizacion" id="fichaCaracterizacion">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="estadoFicha">Estado de la Ficha de Caratcerización</label>
                                <input class="form-control" type="text" name="estadoFicha" id="estadoFicha">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="codigo">Codigo</label>
                                <input class="form-control" type="text" name="codigo" id="codigo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="version">Version</label>
                                <input class="form-control" type="text" name="version" id="version">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="denominacion">Denominacion</label>
                                <input class="form-control" type="text" name="denominacion" id="denominacion">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fechaInicio">Fecha Inicio</label>
                                <input class="form-control" type="date" name="fechaInicio" id="fechaInicio">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fechaFin">Fecha Fin</label>
                                <input class="form-control" type="date" name="fechaFin" id="fechaFin">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="modalidadFormacion">Modalidad de Formacion</label>
                                <input class="form-control" type="text" name="modalidadFormacion" id="modalidadFormacion">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="regional">Regional</label>
                                <input class="form-control" type="text" name="regional" id="regional">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="centroFormacion">Centro de Formacion</label>
                                <input class="form-control" type="text" name="centroFormacion" id="centroFormacion">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group input-group">
                                <label class="input-group-btn">
                            <span class="btn btn-primary" style="margin-top: 36px;">
                                Browse&hellip; <input type="file" name="excel" id="excel" style="display: none;" multiple>
                            </span>
                                </label>
                                <input type="text" class="form-control" readonly style="margin-top: 36px;">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Enviar" >
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
    $(function() {

        // We can attach the `fileselect` event to all file inputs on the page
        $(document).on('change', ':file', function() {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });

        // We can watch for our custom `fileselect` event like this
        $(document).ready( function() {
            $(':file').on('fileselect', function(event, numFiles, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = numFiles > 1 ? numFiles + ' files selected' : label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });
        });

    });


</script>
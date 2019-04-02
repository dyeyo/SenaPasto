@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
                <div class="links  justify-content-between">
                    <form method="post" action="{{url('importarReporteAprendicesFicha')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <h2>REPORTES APRENCIDES POR FICHAS</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fichaCaracterizacion">Ficha de Caracterizacion</label>
                                    <input class="form-control" type="text" name="fichaCaracterizacion" id="fichaCaracterizacion">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <input class="form-control" type="text" name="estado" id="estado">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fechaReporte">Fecha de Reporte</label>
                                    <input class="form-control" type="date" name="fechaReporte" id="fechaReporte">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group form-group">
                                    <label class="input-group-btn">
                            <span class="btn btn-primary" style="margin-top: 36px;">
                                Subir EXCEL&hellip; <input type="file" name="excel" id="excel" style="display: none;" multiple>
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
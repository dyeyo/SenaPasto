@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="links  justify-content-between">
                <form method="post" action="{{url('importarJuicio')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{--<input type="file" name="excel" id="excel">--}}
                    {{--<input type="submit"  class="btn btn-success" value="Enviar" >--}}
                    <div class="input-group">
                        <label class="input-group-btn">
                            <span class="btn btn-primary">
                                Browse&hellip; <input type="file" name="excel" id="excel" style="display: none;" multiple>
                            </span>
                        </label>
                        <input type="text" class="form-control" readonly style="margin-top: 11px;">
                        <input type="submit" class="btn btn-success" value="Enviar" >
                    </div>
                </form>
            </div>
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
                            @foreach($reporteJuicios  as $reporte)
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
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{route('crearReporteInstructores')}}">AREGAR </a>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div  class="table-responsive">
                        <table class="table table-striped" id="tabla">
                            <tr>
                                <th>NombreInstructor</th>
                                <th>ApellidoInstructor</th>
                                <th>EstadoInstructor</th>
                                <th>Competencia</th>
                                <th>FechaInicioProgramacion</th>
                                <th>FechaFinProgramacion</th>
                                <th>HorasProgramadas</th>
                            </tr>
                            @foreach($reporteInstructor as $reporte)
                                <tr>
                                    <td>{{$reporte->NombreInstructor}}</td>
                                    <td>{{$reporte->ApellidoInstructor}}</td>
                                    <td>{{$reporte->EstadoInstructor}}</td>
                                    <td>{{$reporte->Competencia}}</td>
                                    <td>{{$reporte->FechaInicioProgramacion}}</td>
                                    <td>{{$reporte->FechaFinProgramacion}}</td>
                                    <td>{{$reporte->HorasProgramadas}}</td>
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
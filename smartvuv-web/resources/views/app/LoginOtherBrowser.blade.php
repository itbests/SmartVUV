@extends('adminlte::page')

@section('js')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atención',
            text: 'Su sesión ha sido cerrada por inactividad o por haber ingresado al sistema desde otro dispositivo!',
            footer: 'Inicie sesión nuevamente por favor'
        }).then(function() {
            window.location = "LogoutByLoginOtherBrowser";
        });
    </script>
@endsection

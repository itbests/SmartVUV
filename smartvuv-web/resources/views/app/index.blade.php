@extends('adminlte::page')

@section('content')
    <div class="content-header">

        <div class="container-fluid">
            @include('app.partials.header-breadcrumb')
        </div>
        <!-- /.container-fluid -->

    </div>

    <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            @include('app.partials.dashboard-process-count')
        </div>
        <!-- /.boxes (Stat box) -->

        <!-- Main row -->
        <div class="row">
            @include('app.partials.dashboard-graph-user-dependence')
        </div>
        <!-- /.row (main row) -->

    </div>
    <!-- /.container-fluid -->
@endsection

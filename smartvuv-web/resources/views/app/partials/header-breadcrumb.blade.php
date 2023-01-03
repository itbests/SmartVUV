<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">{{ $infoMenu['display_name'] }}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ env('APP_BREADCRUMB') }}">@lang('dashboard.home')</a></li>
        <li class="breadcrumb-item active">{{ $infoMenu['breadcrumb'] }}</li>
    </ol>
    </div><!-- /.col -->
</div><!-- /.row -->

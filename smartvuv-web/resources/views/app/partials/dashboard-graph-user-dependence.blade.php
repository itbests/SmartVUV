<!-- Left col -->
<section class="col-lg-7 connectedSortable ui-sortable">
    <!-- Custom tabs (Charts with tabs)-->
    <div class="card">
        <div class="card-header ui-sortable-handle" style="cursor: move;">
        <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            @lang('dashboard.pending_cases_due_dependency')
        </h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="#revenue-chart" data-toggle="tab">@lang('dashboard.area')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#sales-chart" data-toggle="tab">@lang('dashboard.donut')</a>
            </li>
            </ul>
        </div>
        </div><!-- /.card-header -->
        <div class="card-body">
        <div class="tab-content p-0">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="revenue-chart-canvas" height="300" style="height: 300px; display: block; width: 539px;" width="539" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
            <canvas id="sales-chart-canvas" height="0" style="height: 0px; display: block; width: 0px;" class="chartjs-render-monitor" width="0"></canvas>
            </div>
        </div>
        </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>

<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-lg-5 connectedSortable ui-sortable">
    <!-- solid sales graph -->
    <div class="card bg-gradient-info">
        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
        <h3 class="card-title">
            <i class="fas fa-th mr-1"></i>
            @lang('dashboard.history_attentions')
        </h3>

        <div class="card-tools">
            <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <canvas class="chart chartjs-render-monitor" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 370px;" width="370" height="250"></canvas>
        </div>
        <!-- /.card-body -->
        <div class="card-footer bg-transparent">
        <div class="row">
            <div class="col-4 text-center">
            <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>

            <div class="text-white">@lang('dashboard.on_time')</div>
            </div>
            <!-- ./col -->
            <div class="col-4 text-center">
            <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>

            <div class="text-white">@lang('dashboard.defeateds')</div>
            </div>
            <!-- ./col -->
            <div class="col-4 text-center">
            <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>

            <div class="text-white">@lang('dashboard.reassigned')</div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
</section>
<!-- right col -->

{{-- Setup data for datatables --}}
@php

    /* Construye encabezado */
    $idx = 0;
    $dataTable = $dataGrid['dataTable'];
    $headsOri = array_keys(json_decode($dataTable[0], true));

    /* Construye encabezados y configuración de columnas del dataTable */
    $blActions = false;
    $heads = [];
    $columns = [];
    $newRecord = [];
    $index = [];
    $i = 0;

    foreach ($headsOri as $key => $value) {
        array_push($heads, trans( $dataGrid['langFileTraslate'].".".$value ));
        array_push($columns, null);
        if ( $i > 0 ) array_push($index, $i);
        $i = $i + 1;
    }

    $data = [];
    foreach ($dataTable as $value_dataTable) {
        $reg = [];
        foreach ($headsOri as $value_heads) {
            array_push($reg, $value_dataTable->$value_heads);

            if ( array_key_exists('actionsButtons', $dataGrid) && array_key_exists('visibleColumn', $dataGrid['actionsButtons']) &&
                $dataGrid['actionsButtons']['visibleColumn'] === true && $value_heads == 'id' ) {

                if ( $dataGrid['actionsButtons']['flagShowButton'] === true )
                    $btnDetails = '<button class="show-modal btn btn-xs btn-default text-primary mx-1 shadow" title="Details" data-url="'.route($dataGrid['routeProcess'].'.show',[$value_dataTable->$value_heads]).'"><i class="fa fa-lg fa-fw fa-eye"></i></button>';
                else $btnEdit = null;

                if ( $dataGrid['actionsButtons']['flagEditButton']  === true )
                    $btnEdit = '<button class="edit-modal btn btn-xs btn-default text-teal mx-1 shadow" title="Edit" data-url="'.route($dataGrid['routeProcess'].'.show',[$value_dataTable->$value_heads]).'"><i class="fa fa-lg fa-fw fa-pen"></i></button>';
                else $btnDetails = null;

                if ( $dataGrid['actionsButtons']['flagDeleteButton']  === true )
                    $btnDelete = '<button class="delete-modal btn btn-xs btn-default text-danger mx-1 shadow" title="Delete" data-url="'.route($dataGrid['routeProcess'].'.show',[$value_dataTable->$value_heads]).'"><i class="fa fa-lg fa-fw fa-trash"></i></button>';
                else $btnDelete = null;

                $blActions = true;
            }
        }

        if ( $blActions === true ) array_push($reg, '<nobr>'.$btnDetails.$btnEdit.$btnDelete.'</nobr>');
        array_push($data, $reg);
    }

    if ( array_key_exists('actionsButtons', $dataGrid) && array_key_exists('visibleColumn', $dataGrid['actionsButtons']) &&
         $dataGrid['actionsButtons']['visibleColumn'] === true && ( $dataGrid['actionsButtons']['flagEditButton'] === true ||
         $dataGrid['actionsButtons']['flagDeleteButton']  === true || $dataGrid['actionsButtons']['flagShowButton']  === true ) ) {

        array_push($columns, ['orderable' => false]);
        array_push($heads, ['label' => trans( $dataGrid['langFileTraslate'].".actions"), 'width' => 5]);
    }

    /* Construye botones a mostrar en el dataTable */
    if ( array_key_exists('flagNewRegister', $dataGrid) && $dataGrid['flagNewRegister'] === true )
    {
        $newRecord = [ "extend" => 'newRecord', "text" => trans( $dataGrid['langFileTraslate'].".button_new").' <i class="fas fa-fw fa-lg fa-plus text-default"></i>', "className" => "btn-sm btn-info", "titleAttr" => 'New' ];
    }

    $buttons = [];
    if ( array_key_exists('exportButtons', $dataGrid) && array_key_exists('flagPageLength', $dataGrid['exportButtons']) && $dataGrid['exportButtons']['flagPageLength'] === true )
        array_push($buttons, [
            "extend" => 'pageLength',
            "className" => "btn buttons-collection dropdown-toggle buttons-page-length btn-default"
        ]);

    if ( array_key_exists('exportButtons', $dataGrid) && array_key_exists('flagCopyExportButton', $dataGrid['exportButtons']) && $dataGrid['exportButtons']['flagCopyExportButton'] === true )
        array_push($buttons, [
            "extend" => 'copy',
            "text" => '<i class="fas fa-fw fa-lg fa-copy text-secondary"></i>',
            "className" => "btn-sm btn-default",
            "titleAttr" => 'Copy',
            "header" => true,
            "footer" => true,
            "filename" => $dataGrid['nameOption'],
            "title" => $dataGrid['nameOption']." - ".$dataGrid['cardTitle'],
            "download" => 'open',
            "orientation" => 'landscape',
            "pagesize" => 'LETTER',
            "extension" => '.txt',
            "exportOptions" => [ "columns" => $index ]
        ]);

    if ( array_key_exists('exportButtons', $dataGrid) && array_key_exists('flagPrintExportButton', $dataGrid['exportButtons']) && $dataGrid['exportButtons']['flagPrintExportButton'] === true )
        array_push($buttons, [
            "extend" => 'print',
            "text" => '<i class="fas fa-fw fa-lg fa-print text-dark"></i>',
            "className" => "btn-sm btn-default",
            "titleAttr" => 'Print',
            "header" => true,
            "footer" => true,
            "filename" => $dataGrid['nameOption'],
            "title" => $dataGrid['nameOption']." - ".$dataGrid['cardTitle'],
            "download" => 'closed',
            "orientation" => 'landscape',
            "pagesize" => 'LETTER',
            "exportOptions" => [ "columns" => $index ]
        ]);

    if ( array_key_exists('exportButtons', $dataGrid) && array_key_exists('flagCSVExportButton', $dataGrid['exportButtons']) && $dataGrid['exportButtons']['flagCSVExportButton'] === true )
        array_push($buttons, [
            "extend" => 'csvHtml5',
            "text" => '<i class="fas fa-fw fa-lg fa-file-csv text-primary"></i>',
            "className" => "btn-sm btn-default",
            "titleAttr" => 'Export to CSV',
            "header" => true,
            "footer" => true,
            "filename" => $dataGrid['nameOption'],
            "title" => $dataGrid['nameOption']." - ".$dataGrid['cardTitle'],
            "download" => 'closed',
            "orientation" => 'landscape',
            "pagesize" => 'LETTER',
            "extension" => '.csv',
            "exportOptions" => [ "columns" => $index ]
        ]);

    if ( array_key_exists('exportButtons', $dataGrid) && array_key_exists('flagExcelExportButton', $dataGrid['exportButtons']) && $dataGrid['exportButtons']['flagExcelExportButton'] === true )
        array_push($buttons, [
            "extend" => 'excelHtml5',
            "text" => '<i class="fas fa-fw fa-lg fa-file-excel text-success"></i>',
            "className" => "btn-sm btn-default",
            "titleAttr" => 'Export to Excel',
            "header" => true,
            "footer" => true,
            "filename" => $dataGrid['nameOption'],
            "title" => $dataGrid['nameOption']." - ".$dataGrid['cardTitle'],
            "download" => 'closed',
            "orientation" => 'landscape',
            "pagesize" => 'LETTER',
            "extension" => '.xlsx',
            "exportOptions" => [ "columns" => $index ]
        ]);

    if ( array_key_exists('exportButtons', $dataGrid) && array_key_exists('flagPDFExportButton', $dataGrid['exportButtons']) && $dataGrid['exportButtons']['flagPDFExportButton'] === true )
        array_push($buttons, [
            "extend" => 'pdfHtml5',
            "text" => '<i class="fas fa-fw fa-lg fa-file-pdf text-danger"></i>',
            "className" => "btn-sm btn-default",
            "titleAttr" => 'Export to PDF',
            "header" => true,
            "footer" => true,
            "filename" => $dataGrid['nameOption'],
            "title" => $dataGrid['nameOption']." - ".$dataGrid['cardTitle'],
            "download" => 'closed',
            "orientation" => 'landscape',
            "pagesize" => 'LETTER',
            "extension" => '.pdf',
            "exportOptions" => [ "columns" => $index ]
        ]);

    if ( array_key_exists('exportButtons', $dataGrid) && array_key_exists('flagColvisButton', $dataGrid['exportButtons']) && $dataGrid['exportButtons']['flagColvisButton'] === true )
        array_push($buttons, [ "extend" => 'colvis', "text" => '<i class="fas fa-fw fa-lg fa-list text-info"></i>', "className" => "btn-sm btn-default", "titleAttr" => 'Show Columns' ]);

    array_push($buttons, [ $newRecord ]);

    /* Arma array de configuración para pintar dataTable */
    $config = [
        'data' => $data,
        'order' => [[$dataGrid['columnOrder'], 'asc']],
        'columns' => $columns,
    ];
    $config["lengthMenu"] = [ 10, 25, 50, 100 ];
    $config["paging"] = true;
    $config["lengthChange"] = true;
    $config["searching"] = true;
    $config["ordering"] = true;
    $config["info"] = true;
    $config["autoWidth"] = true;
    $config["responsive"] = true;
    $config["buttons"] = [ $buttons ];
    $config["language"] = [ "url" => '/js/app/lang/dataTable_es-ES.json' ];

    /* Estilos del Card y DataTable */
    if ( array_key_exists('themeCard', $dataGrid) ) $themeCard = $dataGrid['themeCard'];
    else $themeCard = 'lightblue';

    if ( array_key_exists('headThemeTable', $dataGrid) ) $headTheme = $dataGrid['headThemeTable'];
    else $headTheme = 'default';

@endphp

<x-adminlte-card title="{{ $dataGrid['cardTitle'] }}" theme="{{$themeCard}}" theme-mode="outline" icon="fas fa-lg fa-list" header-class="text-uppercase rounded-bottom border-info"
collapsible maximizable>

    {{-- With buttons --}}
    <x-adminlte-datatable id="{{$dataGrid['idTable']}}" :heads="$heads" head-theme="{{$headTheme}}" :config="$config" striped bordered with-buttons compressed/>

</x-adminlte-card>

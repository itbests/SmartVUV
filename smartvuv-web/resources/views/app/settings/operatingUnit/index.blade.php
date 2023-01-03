@extends('adminlte::page')

@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)

@section('content')
    <div class="content-header">

        <div class="container-fluid">
            @include('app.partials.header-breadcrumb')
        </div>
        <!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    @php
                        $dataGrid = [
                            'idTable' => 'operatingUnit',
                            'nameOption' => $infoMenu['display_name'],
                            'cardTitle' => $infoMenu['tooltip'],
                            'themeCard' => 'lightblue',
                            'headThemeTable' => 'default',
                            'langFileTraslate' => 'operatingUnit',
                            'dataTable' => $operatingUnit,
                            'columnOrder' => 0,
                            'flagNewRegister' => true,
                            'routeProcess' => 'operatingUnit',
                            'actionsButtons' => [
                                'visibleColumn' => true,
                                'flagEditButton' => true,
                                'flagShowButton' => true,
                                'flagDeleteButton' => false,
                            ],
                            'exportButtons' => [
                                'flagPageLength' => true,
                                'flagCopyExportButton' => false,
                                'flagPrintExportButton' => true,
                                'flagCSVExportButton' => true,
                                'flagExcelExportButton' => true,
                                'flagPDFExportButton' => true,
                                'flagColvisButton' => true,
                            ]
                        ];
                    @endphp

                    @include('app.components.datagrid')

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Modal form to show a post -->
    {{-- Themed --}}
    <x-adminlte-modal id="showModal" title="{{ $infoMenu['display_name'] }}" theme="primary"
        icon="fas fa-bullhorn" size='lg' enable-animations>

        <x-adminlte-input name="name_" label="Unidad Operativa" placeholder="Prueba" >
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-sitemap text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="address" label="Dirección" placeholder="Dirección"  enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text text-olive">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="office" label="Oficina" placeholder="Oficina" type="number"
            igroup-size="sm" min=1 max=10>
            <x-slot name="appendSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-hashtag"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="phone1" label="Teléfono" placeholder="Teléfono" enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text text-olive">
                    <i class="fas fa-phone"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="mobil" label="Celular" placeholder="Celular" enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text text-olive">
                    <i class="fas fa-mobil"></i>
                </div>
            </x-slot>
        </x-adminlte-input>



        {{-- Minimal --}}
        <x-adminlte-input name="iBasic"/>

        {{-- Email type --}}
        <x-adminlte-input name="iMail" type="email" placeholder="mail@example.com"/>

        {{-- With label, invalid feedback disabled and form group class --}}
        <div class="row">
            <x-adminlte-input name="iLabel" label="Label" placeholder="placeholder"
                fgroup-class="col-md-6" disable-feedback/>
        </div>

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="User" placeholder="username" label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With append slot, number type and sm size --}}
        <x-adminlte-input name="iNum" label="Number" placeholder="number" type="number"
            igroup-size="sm" min=1 max=10>
            <x-slot name="appendSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-hashtag"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With a link on the bottom slot and old support enabled --}}
        <x-adminlte-input name="iPostalCode" label="Postal Code" placeholder="postal code"
            enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text text-olive">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
            </x-slot>
            <x-slot name="bottomSlot">
                <a href="#">Search your postal code here</a>
            </x-slot>
        </x-adminlte-input>

        {{-- With extra information on the bottom slot --}}
        <x-adminlte-input name="iExtraAddress" label="Other Address Data">
            <x-slot name="prependSlot">
                <div class="input-group-text text-purple">
                    <i class="fas fa-address-card"></i>
                </div>
            </x-slot>
            <x-slot name="bottomSlot">
                <span class="text-sm text-gray">
                    [Add other address information you may consider important]
                </span>
            </x-slot>
        </x-adminlte-input>

        {{-- With multiple slots and lg size --}}
        <x-adminlte-input name="iSearch" label="Search" placeholder="search" igroup-size="lg">
            <x-slot name="appendSlot">
                <x-adminlte-button theme="outline-danger" label="Go!"/>
            </x-slot>
            <x-slot name="prependSlot">
                <div class="input-group-text text-danger">
                    <i class="fas fa-search"></i>
                </div>
            </x-slot>
        </x-adminlte-input>


    </x-adminlte-modal>

    <div id="showModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"><b>@lang('operatingUnit.title_show_edit')</b></h4>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

    <!-- Modal form to edit a form -->
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

    <!-- Modal form to delete a form -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('/js/app/settings/operatingUnit.js') }}" defer></script>
@endsection

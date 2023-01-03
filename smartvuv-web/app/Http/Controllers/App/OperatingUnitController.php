<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Status;
use App\Models\OperatingUnit;

class OperatingUnitController extends Controller
{
    protected $redirectTo = 'app/operatingUnit';

    protected $rules =
    [
        'name_' => 'required|string|max:200',
        'description' => 'required|string|max:2000'
    ];

    public function index()
    {
        $status = Status::comboBox();

        $infoMenu = Menu::getInfoMenu('app/operatingUnit');
        //$operatingUnit = OperatingUnit::orderBy('id','ASC')->get();
        $operatingUnit = OperatingUnit::join('status','status.id', '=', 'operating_unit.status_id')
                            ->select(
                                'operating_unit.id',
                                'operating_unit.name_',
                                'operating_unit.address',
                                'operating_unit.office_id',
                                'operating_unit.phone1',
                                'operating_unit.phone2',
                                'operating_unit.email',
                                'operating_unit.view_line_process',
                                'operating_unit.autoassigned',
                                'operating_unit.register_date',
                                'status.name_ as status_id'
                            )->get();

        return view('app.settings.operatingUnit.index', ['operatingUnit' => $operatingUnit, 'infoMenu' => $infoMenu]);
    }

    public function show($id)
    {
        $operatingUnit = OperatingUnit::findOrFail($id);

        $data = [];
        $data['id'] = $operatingUnit->id;
        $data['name_'] = $operatingUnit->name_;
        $data['address'] = $operatingUnit->address;
        $data['office_id'] = $operatingUnit->office_id;
        $data['phone1'] = $operatingUnit->phone1;
        $data['phone2'] = $operatingUnit->phone2;
        $data['email'] = $operatingUnit->email;
        $data['view_line_process'] = $operatingUnit->view_line_process;
        $data['autoassigned'] = $operatingUnit->autoassigned;
        $data['register_date'] = $operatingUnit->register_date;
        $data['status_id'] = $operatingUnit->status->name_;

        return json_encode($data, JSON_FORCE_OBJECT);
    }

    public function update(Request $request)
    {

    }

    public function listsDependence($company_id, $parent)
    {

    }

    public function getChildren($data, $line)
    {

    }

    public function destroy($id)
    {

    }

}

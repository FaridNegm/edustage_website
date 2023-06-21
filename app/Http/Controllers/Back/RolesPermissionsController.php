<?php

namespace App\Http\Controllers\Back;

use App\Models\Back\RolesPermissions;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Hash;
use DB;

class RolesPermissionsController extends Controller
{
    public function index()
    {
        // $all_roles_permissions = RolesPermissions::all();
        // , compact('all_roles_permissions')
        return view('back/roles_permissions/index');

    }

    public function create()
    {
        // $find = RolesPermissions::orderBy('id', 'DESC')->first();
        // $regions = Region::orderBy('id', 'ASC')->where('status', 1)->get();
        // , compact('find', 'regions')
        return view('back/roles_permissions/add');
    }

    public function store(Request $request)
    {
        $this->validate($request , [
          'code' => 'required|unique:roles_permissions,code',
          'name_ar' => 'required|unique:roles_permissions,name_ar',
          'name_en' => 'required|unique:roles_permissions,name_en',
          'mobile' => 'required',
          'region' => 'required',
          'address' => 'required',
        ]);

        $data = [
            'code' => request('code'),
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'region' => request('region'),
            'address' => request('address'),
            'manager' => request('manager'),
            'phone' => request('phone'),
            'mobile' => request('mobile'),
            'fax' => request('fax'),
            'email' => request('email'),
            'status' => request('status')
        ];

        RolesPermissions::create($data);
    }

    public function show($id)
    {
        $data = RolesPermissions::where('id' , $id)->first();
    }

    public function edit($id)
    {
        $find = RolesPermissions::orderBy('id', 'DESC')->first();
        $data = RolesPermissions::where('id' , $id)->first();
        $regions = Region::orderBy('id', 'ASC')->where('status', 1)->get();
        return view('back/roles_permissions/edit', compact('data', 'find', 'regions'));
    }

    public function update(Request $request, $id)
    {
        $find = RolesPermissions::findorFail($id);

        $this->validate($request , [
            'code' => 'required|unique:roles_permissions,code,'.$id,
            'name_ar' => 'required|unique:roles_permissions,name_ar,'.$id,
            'name_en' => 'required|unique:roles_permissions,name_en,'.$id,
            'mobile' => 'required',
            'region' => 'required',
            'address' => 'required',
        ]);

        $data = [
            'code' => request('code'),
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'region' => request('region'),
            'address' => request('address'),
            'manager' => request('manager'),
            'phone' => request('phone'),
            'mobile' => request('mobile'),
            'fax' => request('fax'),
            'email' => request('email'),
            'status' => request('status')
        ];

        $find->update($data);
    }

    public function destroy($id, Request $request)
    {
        RolesPermissions::findOrFail($id)->delete();
    }

    public function destroy_selected(Request $request)
    {
        RolesPermissions::whereIn("id" , request("delete_selected"))->delete();
    }








    ///////////////////////////////////////////////  datatable_roles_permissions  /////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function datatable_roles_permissions()
    {
        if(app()->getLocale() == 'en'){
            $all = RolesPermissions::all();
            return DataTables::of($all)
            ->addColumn('id', function($res){
                return '<form class"form_delete_selected">
                            <div class="form-check font-size-16">
                                <input class="form-check-input" type="checkbox" id="" name="delete_selected[]" value="'.$res->id.'">
                                <label class="form-check-label" for=""></label>
                            </div>
                        </form>';
            })
            ->addColumn('code', function($res){
                $code = $res->code;
                return $code;
            })
            ->addColumn('name_en', function($res){
                $name_en = $res->name_en;
                return "<span style='font-weight: bold;'>".$name_en."</span>";
            })
            ->addColumn('mobile', function($res){
                $mobile = $res->mobile;
                return $mobile;
            })
            ->addColumn('region', function($res){
                $region = $res->region_name['name_en'];
                return $region;
            })
            ->addColumn('manager', function($res){
                $manager = $res->manager;
                return "<span style='font-weight: bold;'>".$manager."</span>";
            })
            ->addColumn('status', function($res){
                $status = $res->status == 1 ? '<i class="far fa-check-circle" style="font-size:18px;color: #54ca68;"></i>'  : '<i class="far fa-times-circle" style="font-size:18px;color: #f97a80;"></i>';
                return $status;
            })
            ->addColumn('action', function($res){
                // $buttons = '<i class="icon-pencil3 btn btn-xs btn-icon legitRipple edit bt_modal" act="'.url('back/roles_permissions/edit/'.$res->id).'" type="button" style="margin: 0px 2px;background: #4B6587;color: #FFF;padding: 2px 8px;font-size: 16px;"></i>';

                $buttons = '<a class="text-success edit bt_modal" type="button" act="'.url('admin/roles_permissions/edit/'.$res->id).'"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fas fa-pencil-alt font-size-16"></i></a>';

                $buttons .= '<a  type="button" class="text-danger delete" loop_id="'.$res->id.'"><i class="fas fa-trash-alt font-size-16"></i></a>';

                return $buttons;
            })
            ->rawColumns(['id', 'code', 'name_en', 'mobile', 'region', 'manager', 'status', 'action'])
            ->make(true);

        }elseif(app()->getLocale() == 'ar'){
            $all = RolesPermissions::all();
            return DataTables::of($all)
            ->addColumn('id', function($res){
                return '<form class"form_delete_selected">
                            <div class="form-check font-size-16">
                                <input class="form-check-input" type="checkbox" id="" name="delete_selected[]" value="'.$res->id.'">
                                <label class="form-check-label" for=""></label>
                            </div>
                        </form>';
            })
            ->addColumn('code', function($res){
                $code = $res->code;
                return $code;
            })
            ->addColumn('name_ar', function($res){
                $name_ar = $res->name_ar;
                return "<span style='font-weight: bold;'>".$name_ar."</span>";
            })
            ->addColumn('mobile', function($res){
                $mobile = $res->mobile;
                return $mobile;
            })
            ->addColumn('region', function($res){
                $region = $res->region_name['name_ar'];
                return $region;
            })
            ->addColumn('manager', function($res){
                $manager = $res->manager;
                return "<span style='font-weight: bold;'>".$manager."</span>";
            })
            ->addColumn('status', function($res){
                $status = $res->status == 1 ? '<i class="far fa-check-circle" style="font-size:18px;color: #54ca68;"></i>'  : '<i class="far fa-times-circle" style="font-size:18px;color: #f97a80;"></i>';
                return $status;
            })
            ->addColumn('action', function($res){
                // $buttons = '<i class="icon-pencil3 btn btn-xs btn-icon legitRipple edit bt_modal" act="'.url('back/roles_permissions/edit/'.$res->id).'" type="button" style="margin: 0px 2px;background: #4B6587;color: #FFF;padding: 2px 8px;font-size: 16px;"></i>';

                $buttons = '<a class="text-success edit bt_modal" type="button" act="'.url('admin/roles_permissions/edit/'.$res->id).'"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fas fa-pencil-alt font-size-16"></i></a>';

                $buttons .= '<a  type="button" class="text-danger delete" loop_id="'.$res->id.'"><i class="fas fa-trash-alt font-size-16"></i></a>';

                return $buttons;
            })
            ->rawColumns(['id', 'code', 'name_ar', 'mobile', 'region', 'manager', 'status', 'action'])
            ->make(true);
        }
    }

}

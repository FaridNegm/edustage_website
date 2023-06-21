<?php

namespace App\Http\Controllers\Back;

use DB;
use Illuminate\Support\Facades\Hash;
use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Back\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index()
    {
        return view('back/settings/index');
    }

    public function show($id)
    {
        $find = Setting::where('id' , $id)->first();
        return view('back/settings/show', compact('find'));
    }

    public function edit($id)
    {
        $find = Setting::where('id' , $id)->first();
        return view('back/settings/edit', compact('find'));
    }

    public function update(Request $request, $id)
    {
        $find = Setting::where('id', $id)->first();
        
        $this->validate($request , [
            'app_name' => 'required',
            'phone1' => 'required',
            'address' => 'required',
        ]);

        if(request('logo_website') == ""){
            $logo_website = request("image_hidden_logo_website");
        }else{
            $file = request('logo_website');
            $logo_website = rand(1,100) . '.' .$file->getClientOriginalName();
            $path = public_path('back/images/settings');
            $file->move($path , $logo_website);
            
            File::delete(public_path('back/images/settings/'.$find['logo_website']));
        }
        
        if(request('logo_dashboard') == ""){
            $logo_dashboard = request("image_hidden_logo_dashboard");
        }else{
            $file = request('logo_dashboard');
            $logo_dashboard = rand(100,200) . '.' .$file->getClientOriginalName();
            $path = public_path('back/images/settings');
            $file->move($path , $logo_dashboard);
            
            File::delete(public_path('back/images/settings/'.$find['logo_dashboard']));
        }
        
        if(request('fav_icon') == ""){
            $fav_icon = request("image_hidden_fav_icon");
        }else{
            $file = request('fav_icon');
            $fav_icon = rand(200,300) . '.' .$file->getClientOriginalName();
            $path = public_path('back/images/settings');
            $file->move($path , $fav_icon);
            
            File::delete(public_path('back/images/settings/'.$find['fav_icon']));
        }

        $data = [
            'app_name' => request('app_name'),
            'description' => request('description'),
            'lang' => request('lang'),
            'logo_website' => $logo_website,
            'logo_dashboard' => $logo_dashboard,
            'fav_icon' => $fav_icon,
            'footer_text' => request('footer_text'),
            'address' => request('address'),
            'city' => request('city'),
            'zip_code' => request('zip_code'),
            'email' => request('email'),
            'phone1' => request('phone1'),
            'phone2' => request('phone2'),
            'accept_cookies' => request('accept_cookies') != null ? 1 : 0,
            'mail_driver' => request('mail_driver'),
            'from' => request('from'),
            'to' => request('to'),
            'host' => request('host'),
            'port' => request('port'),
            'encryption' => request('encryption'),
            'username' => request('username'),
            'password' => request('password'),
            'facebook' => request('facebook'),
            'twitter' => request('twitter'),
            'linked_in' => request('linked_in'),
            'google' => request('google'),
            'tiktok' => request('tiktok'),
            'youtube' => request('youtube'),
        ];

        $find->update($data);
    }





    ///////////////////////////////////////////////  datatable_settings  /////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function datatable_settings()
    {
        $all = Setting::all();
        return DataTables::of($all)
        ->addColumn('app_name', function($res){
            return "
                <div style='padding:2px;'>
                    <a style='color:#24ABF2;margin: 0px 5px;font-weight: bold;font-size: 15px;'>"
                        .$res->app_name.
                    "</a>
                </div>                    
            ";
        })
        ->addColumn('phone', function($res){
            return "
                <div style='padding:2px;'>
                    <i class='fa fa-phone'></i>
                    <span style='margin: 0px 5px;'>"
                        .$res->phone1.
                    "</span>
                </div>

                <div style='padding:2px;'>
                    <i class='fa fa-phone'></i>
                    <span style='margin: 0px 5px;'>"
                        .$res->phone2.
                    "</span>
                </div>
            ";
        })
        ->addColumn('description', function($res){
            return $res->description;
        })
        ->addColumn('action', function($res){
            $buttons = '<a class="btn btn-outline-success btn-sm edit bt_modal" title="Edit" act="'.url('admin/settings/edit/'.$res->id).'"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <i class="fas fa-pencil-alt"></i>
            </a>';

            $buttons .= '<a class="btn btn-outline-info btn-sm edit bt_modal" title="view" act="'.url('admin/settings/show/'.$res->id).'"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <i class="fas fa-eye"></i>
            </a>';
                                    
            return $buttons;
        })
        ->rawColumns(['app_name', 'phone', 'description', 'action'])
        ->make(true);
    }
}

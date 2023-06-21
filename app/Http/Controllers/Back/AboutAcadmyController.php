<?php

namespace App\Http\Controllers\Back;

use DB;
use Illuminate\Support\Facades\Hash;
use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Back\AboutAcadmy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;

class AboutAcadmyController extends Controller
{
    public function index()
    {
        return view('back/about_acadmy/index');
    }

    public function create()
    {
        return view('back/about_acadmy/add');
    }

    public function store(Request $request)
    {
        dd(request('description'));
        $this->validate($request , [
            'title' => 'required|unique:about_acadmies,title',
            'description' => 'required',
        ]);

        // if(request('image') == ""){
        //     $name = null;
        //     for($i = 0; $i < count(request('media')); $i++){
        //         $data = [
        //             'title' => request('title'),
        //             'group_id' => AboutAcadmy::orderBy('id', 'desc')->select('id')->first()+1,
        //             'description' => request('description'),
        //             'media' => $name,
        //             'status' => request('status')
        //         ];
        //     }
        // }else{
        //     $file = request('media');
        //     $name = time() . '.' .$file->getClientOriginalExtension();
        //     $path = public_path('back/images/about_acadmy');
        //     $file->move($path , $name);

        //     $data = [];
        //     for($i = 0; $i < count(request('media')); $i++){
        //         $data[] = [
        //             'title' => request('title'),
        //             'group_id' => AboutAcadmy::orderBy('id', 'desc')->select('id')->first()+1,
        //             'description' => request('description'),
        //             'media' => $name[$i],
        //             'status' => request('status')
        //         ];
        //     }
        // }

        $data = [
            'title' => request('title'),
            'group_id' => AboutAcadmy::orderBy('id', 'desc')->select('id')->first()+1,
            'description' => request('description'),
            // 'media' => $name[$i],
            'status' => request('status')
        ];

        AboutAcadmy::create($data);
    }

    public function show($id)
    {
        $find = AboutAcadmy::where('name' , $id)->first();
        return view('back/about_acadmy/show', compact('find'));
    }

    public function edit($id)
    {
        $find = AboutAcadmy::where('name' , $id)->first();
        return view('back/about_acadmy/edit', compact('find'));
    }

    public function update(Request $request, $id)
    {
        $find = AboutAcadmy::where('name', $id)->first();
        
        $this->validate($request , [
            'name' => 'required',
            'user_name' => 'required|unique:users,user_name,'.$id,
            'phone' => 'required|unique:users,user_phone,'.$id,
        ]);

        if(request('image') == ""){
            $name = request("image_hidden");
        }else{
            $file = request('image');
            $name = time() . '.' .$file->getClientOriginalExtension();
            $path = public_path('back/images/about_acadmy');
            $file->move($path , $name);
            
            if(request("image_hidden") != "df_image.png"){
                File::delete(public_path('back/images/about_acadmy/'.$find['image']));
            }
        }

        $data = [
            'address' => request('address'),
            'nat_id' => request('nat_id'),
            'birth_date' => request('birth_date'),
            'image' => $name,
            'note' => request('note'),
            'gender' => request('gender'),
            'status' => request('status')
        ];

        $find->update($data);
    }

    public function destroy($id, Request $request)
    {
        AboutAcadmy::where('name', $id)->delete();
    }

    public function destroy_selected(Request $request)
    {
        AboutAcadmy::whereIn("name" , request("delete_selected"))->delete();
    }









    ///////////////////////////////////////////////  datatable_about_acadmy  /////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function datatable_about_acadmy()
    {
        $all = AboutAcadmy::all();
        return DataTables::of($all)
        ->addColumn('image', function($res){
            $image ='
                <a class="spotlight" href="'.url('back/images/about_acadmy/'.$res->image).'">
                    <img src="'.url('back/images/about_acadmy/'.$res->image).'" style="width: 50px;height: 50px;border-radius: 50%;margin: 10px auto;display: block;">
                </a>
            ';
            return $image;
        })
        ->addColumn('title', function($res){
            return "
                <p style='color:#24ABF2;margin: 0px 5px;font-weight: bold;font-size: 15px;'>"
                    .$res->title.
                "</p>
            ";
        })
        ->addColumn('contact', function($res){
            return "
                <div style='padding:2px;'>
                    <i class='fa fa-phone'></i>
                    <span style='margin: 0px 5px;'>"
                        .$res->admin_name['user_phone'].
                    "</span>
                </div>

                <div style='padding:2px;'>
                    <i class='fa fa-envelope'></i>
                    <span style='margin: 0px 5px;'>"
                        .$res->admin_name['email'].
                    "</span>
                </div>
            ";
        })
        ->addColumn('last_login_time', function($res){
            if($res->admin_name['last_login_time'] == null){
                return "
                    <div style='padding:2px;'>
                        <i class='fas fa-clock'></i>
                    </div>
                ";
            }else{
                return "
                    <div style='padding:2px;'>
                        <i class='fas fa-clock'></i>
                        <span style='margin: 0px 5px;'>"
                            .Carbon::parse($res->admin_name['last_login_time'])->format('d-m-Y').
                        "</span>
                        <span style='margin: 0px 5px;color: red;'>"
                            .Carbon::parse($res->admin_name['last_login_time'])->format('h:i:s a').
                        "</span>
                    </div>
                ";
            }
        })
        ->addColumn('gender', function($res){
            $gender = $res->gender == 1 ? '<i class="fa fa-male" style="font-size:18px;color: #54ca68;"></i>'  : '<i class="fa fa-female" style="font-size:18px;color: #f97a80;"></i>';
            return $gender;
        })
        ->addColumn('status', function($res){
            if($res->status == 1){
                return "<i class='far fa-check-circle' style='font-size:18px;color: #54ca68;margin: 3px 5px'></i>";
            }else{
                return "<i class='far fa-times-circle' style='font-size:18px;color: #f97a80;margin: 3px 5px'></i>";
            }
        })
        ->addColumn('action', function($res){
            $buttons = '<a class="btn btn-outline-success btn-sm edit bt_modal" title="Edit" act="'.url('admin/about_acadmy/edit/'.$res->name).'"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <i class="fas fa-pencil-alt"></i>
            </a>';
            
            $buttons .= '<a class="btn btn-outline-info btn-sm show bt_modal" act="'.url('admin/about_acadmy/show/'.$res->name).'"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <i class="fas fa-eye"></i>
            </a>';

            $buttons .= '<a class="btn btn-outline-danger btn-sm delete" loop_id="'.$res->name.'">
                <i class="fas fa-trash-alt"></i>
            </a>';
            
            $buttons .= '<a class="btn btn-outline-dark btn-sm bt_modal" act="'.url('admin/about_acadmy/change_password/'.$res->name).'"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <i class="fas fa-key"></i>
            </a>';
            
            return $buttons;
        })
        ->rawColumns(['image', 'user', 'contact', 'last_login_time', 'branche', 'gender', 'status', 'action'])
        ->make(true);
    }
}

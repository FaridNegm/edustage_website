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
        // dd(count(request('media'));
        $this->validate($request , [
            'title' => 'required|unique:about_acadmies,title',
            'description' => 'required',
        ]);

        $group_id = AboutAcadmy::orderBy('id', 'desc')->select('id')->first();

        if(request('media') == null){
            $data = [
                'title' => request('title'),
                'group_id' => $group_id['id']+1,
                'description' => request('description'),
                'media' => null,
                'status' => request('status')
            ];
        }else{
            $images = [];
            foreach(request('media') as $file){
                $name = rand(1,1000) . '.' .$file->getClientOriginalName();
                $path = public_path('back/images/about_acadmy');
                $file->move($path , $name);
                $images[] = $name;

            }

            AboutAcadmy::insert([
                'title' => request('title'),
                'description' => request('description'),
                'media' => implode('|', $images),
                'status' => request('status')
            ]);
        }

        return redirect()->to('admin/about_acadmy');
    }

    public function show($id)
    {
        $find = AboutAcadmy::where('id' , $id)->first();
        $images_explode = explode('|', $find['media']);
        return view('back/about_acadmy/show', compact('find', 'images_explode'));
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
        ->addColumn('title', function($res){
            return "
                <p style='color:#24ABF2;margin: 0px 5px;font-weight: bold;font-size: 15px;'>"
                    .$res->title.
                "</p>
            ";
        })
        ->addColumn('description', function($res){
            return "
                <p style='margin: 0px 5px;font-weight: bold;font-size: 15px;'>"
                    .implode(' ', array_slice(explode(' ', $res->description), 0, 40)).
                "</p>
            ";
        })
        ->addColumn('status', function($res){
            if($res->status == 1){
                return "<i class='far fa-check-circle' style='font-size:18px;color: #54ca68;margin: 3px 5px'></i>";
            }else{
                return "<i class='far fa-times-circle' style='font-size:18px;color: #f97a80;margin: 3px 5px'></i>";
            }
        })
        ->addColumn('action', function($res){
            $buttons = '<a href="'.url('admin/about_acadmy/edit/'.$res->id).'" class="btn btn-outline-success btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>';
            
            $buttons .= '<a class="btn btn-outline-info btn-sm" href="'.url('admin/about_acadmy/show/'.$res->id).'" style="margin: 0px 5px 0px 0px;">
                <i class="fas fa-eye"></i>
            </a>';

            $buttons .= '<a class="btn btn-outline-danger btn-sm delete" loop_id="'.$res->id.'">
                <i class="fas fa-trash-alt"></i>
            </a>';
                        
            return $buttons;
        })
        ->rawColumns(['title', 'description', 'status', 'action'])
        ->make(true);
    }
}

<?php

namespace App\Http\Controllers\Back;

use DB;
use Carbon\Carbon;
use App\Models\Back\TablePrice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;


class TablePriceController extends Controller
{
    public function index()
    {
        
        return view('back/table_prices/index');
    }

    public function create()
    {
        return view('back/table_prices/add');
    }

    public function store(Request $request)
    {

        // dd(request('all_mat_video_desc')->getClientOriginalName());

        $this->validate($request , [
            'class_room_name' => 'required|unique:table_prices,class_room_name',
            'one_mat_heading_desc' => 'required',
            'one_mat_table_prices' => 'required',
            'one_mat_body_desc' => 'required',
            'arabic_lessons_time' => 'required',
            'english_lessons_time' => 'required',
            'all_mat_img_desc'=> 'mimes:jpeg,jpg,png,gif',
            'all_mat_video_desc'=> 'mimes:mp4,3gp',
            
        ],[
            'class_room_name.required' => 'قيمة الصف الدراسي مطلوبة',
            'class_room_name.unique' => 'قيمة الصف الدراسي مستخدمة من قبل',
            'one_mat_heading_desc.required' => 'قيمة وصف عنوان الباقة مطلوبة',
            'one_mat_table_prices.required' => 'قيمة جدول اسعار الباقة مطلوب',
            'one_mat_body_desc.required' => 'قيمة وصف الباقة مطلوبة',
            'arabic_lessons_time.required' => 'قيمة جدول الحصص بالعربي مطلوبة',
            'english_lessons_time.required' => 'قيمة جدول الحصص باللغات مطلوبة',
            'all_mat_img_desc.mimes' => 'يجب أن يكون الملف عبارة عن صورة من نوع : jpeg ، jpg ، png ، gif',
            'all_mat_video_desc.mimes' => 'يجب أن يكون الملف عبارة عن فديو من نوع : mp4 ، 3gp',
        ]);

        if(request('all_mat_img_desc') == ""){
            $name = null;
        }else{
            $file = request('all_mat_img_desc');
            $name = time() . '.' .$file->getClientOriginalName();
            $path = public_path('back/images/table_prices');
            $file->move($path , $name);
        }
        
        if(request('all_mat_video_desc') == ""){
            $name_video = null;
        }else{
            $file = request('all_mat_video_desc');
            $name_video = time() . '.' .$file->getClientOriginalName();
            $path = public_path('back/images/table_prices');
            $file->move($path , $name_video);
        }

        $data = [
            'class_room_name' => request('class_room_name'),
            'all_mat_heading_desc' => request("all_mat_heading_desc"),
            'all_mat_body_desc' => request("all_mat_body_desc"),
            'all_mat_body_desc_status' => request('all_mat_body_desc_status') == null ? 0 : 1,
            'all_mat_img_desc' => $name,
            'all_mat_img_desc_status' => request('all_mat_img_desc_status') == null ? 0 : 1,
            'all_mat_video_desc' => $name_video,
            'all_mat_video_desc_status' => request('all_mat_video_desc_status') == null ? 0 : 1,
            'all_mat_footer_desc' => request('all_mat_footer_desc'),
            'all_mat_counter_heading' => request('all_mat_counter_heading'),
            'all_mat_counter_from' => request('all_mat_counter_from'),
            'all_mat_counter_to' => request('all_mat_counter_to'),
            'one_mat_heading_desc' => request('one_mat_heading_desc'),
            'one_mat_table_prices' => request('one_mat_table_prices'),
            'one_mat_body_desc' => request('one_mat_body_desc'),
            'one_mat_counter_heading' => request('one_mat_counter_heading'),
            'one_mat_counter_from' => request('one_mat_counter_from'),
            'one_mat_counter_to' => request('one_mat_counter_to'),
            'arabic_lessons_time' => request('arabic_lessons_time'),
            'english_lessons_time' => request('english_lessons_time'),
        ];

        TablePrice::create($data);

        return redirect()->to('admin/table_prices');
    }

    public function show($id)
    {
        $find = TablePrice::where('id' , $id)->first();
        return view('back/table_prices/show', compact('find'));
    }

    public function edit($id)
    {
        $find = TablePrice::where('id' , $id)->first();
        return view('back/table_prices/edit', compact('find'));
    }

    public function update(Request $request, $id)
    {
        $find = TablePrice::where('id', $id)->first();
        
        $this->validate($request , [
            'class_room_name' => 'required|unique:table_prices,class_room_name,'.$id,
            'one_mat_heading_desc' => 'required',
            'one_mat_table_prices' => 'required',
            'one_mat_body_desc' => 'required',
            'arabic_lessons_time' => 'required',
            'english_lessons_time' => 'required',
            
        ],[
            'class_room_name.required' => 'قيمة الصف الدراسي مطلوبة',
            'class_room_name.unique' => 'قيمة الصف الدراسي مستخدمة من قبل',
            'one_mat_heading_desc.required' => 'قيمة وصف عنوان الباقة مطلوبة',
            'one_mat_table_prices.required' => 'قيمة جدول اسعار الباقة مطلوب',
            'one_mat_body_desc.required' => 'قيمة وصف الباقة مطلوبة',
            'arabic_lessons_time.required' => 'قيمة جدول الحصص بالعربي مطلوبة',
            'english_lessons_time.required' => 'قيمة جدول الحصص باللغات مطلوبة',
        ]);

        if(request('all_mat_img_desc') == ""){
            $name = request('all_mat_img_desc_hidden');
        }else{
            $file = request('all_mat_img_desc');
            $name = time() . '.' .$file->getClientOriginalName();
            $path = public_path('back/images/table_prices');
            $file->move($path , $name);

            File::delete(public_path('back/images/table_prices/'.$find['all_mat_img_desc']));
        }
        
        if(request('all_mat_video_desc') == ""){
            $name_video = request('all_mat_video_desc_hidden');
        }else{
            $file = request('all_mat_video_desc');
            $name_video = time() . '.' .$file->getClientOriginalName();
            $path = public_path('back/images/table_prices');
            $file->move($path , $name_video);

            File::delete(public_path('back/images/table_prices/'.$find['all_mat_video_desc']));    
        }
        $data = [
            'class_room_name' => request('class_room_name'),
            'all_mat_heading_desc' => request("all_mat_heading_desc"),
            'all_mat_body_desc' => request("all_mat_body_desc"),
            'all_mat_body_desc_status' => request('all_mat_body_desc_status') == null ? 0 : 1,
            'all_mat_img_desc' => $name,
            'all_mat_img_desc_status' => request('all_mat_img_desc_status') == null ? 0 : 1,
            'all_mat_video_desc' => $name_video,
            'all_mat_video_desc_status' => request('all_mat_video_desc_status') == null ? 0 : 1,
            'all_mat_footer_desc' => request('all_mat_footer_desc'),
            'all_mat_counter_heading' => request('all_mat_counter_heading'),
            'all_mat_counter_from' => request('all_mat_counter_from'),
            'all_mat_counter_to' => request('all_mat_counter_to'),
            'one_mat_heading_desc' => request('one_mat_heading_desc'),
            'one_mat_table_prices' => request('one_mat_table_prices'),
            'one_mat_body_desc' => request('one_mat_body_desc'),
            'one_mat_counter_heading' => request('one_mat_counter_heading'),
            'one_mat_counter_from' => request('one_mat_counter_from'),
            'one_mat_counter_to' => request('one_mat_counter_to'),
            'arabic_lessons_time' => request('arabic_lessons_time'),
            'english_lessons_time' => request('english_lessons_time'),
        ];

        $find->update($data);

        return redirect()->to('admin/table_prices');
    }

    public function destroy($id, Request $request)
    {
        $find = TablePrice::where('id' , $id)->first();
        $find->delete();
        File::delete(public_path('back/images/table_prices/'.$find['all_mat_img_desc']));
        File::delete(public_path('back/images/table_prices/'.$find['all_mat_video_desc']));
    }

    public function destroy_selected(Request $request)
    {
        $find = TablePrice::whereIn("id" , request("delete_selected"))->get();
        TablePrice::whereIn("id" , request("delete_selected"))->delete();


        $images = explode(",", $find->all_mat_img_desc);

        foreach ($images as $image) {
            // Storage::delete("uploaded-images/{$image}");
            File::delete(public_path('back/images/table_prices/'.$image['all_mat_img_desc']));
        }


        File::delete(public_path('back/images/table_prices/'.$find['all_mat_img_desc']));
        File::delete(public_path('back/images/table_prices/'.$find['all_mat_video_desc']));
    }









    ///////////////////////////////////////////////  datatable_table_prices  /////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function datatable_table_prices()
    {
        $all = TablePrice::all();
        return DataTables::of($all)
        ->addColumn('id', function($res){
            return '<form class"form_delete_selected">
                        <div class="form-check font-size-16">
                            <input class="form-check-input" type="checkbox" id="" name="delete_selected[]" value="'.$res->id.'">
                            <label class="form-check-label" for=""></label>
                        </div>
                    </form>';
        })
        ->addColumn('class_room_name', function($res){
            return "
                <div style='padding:2px;'>
                    <a style='color:#24ABF2;margin: 0px 5px;font-weight: bold;font-size: 15px;'>"
                        .$res->class_room_name.
                    "</a>
                </div>";
        })
        ->addColumn('action', function($res){
            $buttons = '<a href="'.url('admin/table_prices/edit/'.$res->id).'" class="btn btn-outline-success btn-sm" title="Edit">
                <i class="fas fa-pencil-alt"></i>
            </a>';
            
            $buttons .= '<a class="btn btn-outline-danger btn-sm delete" loop_id="'.$res->id.'">
                <i class="fas fa-trash-alt"></i>
            </a>';

            $buttons .= '<a href="'.url('admin/table_prices/show/'.$res->id).'" class="btn btn-outline-info btn-sm">
                <i class="fas fa-eye"></i>
            </a>';

            return $buttons;
        })
        ->rawColumns(['id', 'class_room_name', 'action'])
        ->make(true);
    }
}

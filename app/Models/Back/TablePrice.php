<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class TablePrice extends Model
{
    protected $table = 'table_prices';
    protected $fillable = [
        'class_room_name', 'all_mat_heading_desc', 'all_mat_body_desc', 'all_mat_body_desc_status', 'all_mat_img_desc', 'all_mat_img_desc_status', 'all_mat_video_desc', 'all_mat_video_desc_status', 'all_mat_footer_desc', 'all_mat_counter_heading', 'all_mat_counter_from', 'all_mat_counter_to', 'one_mat_heading_desc', 'one_mat_table_prices', 'one_mat_body_desc', 'one_mat_counter_heading', 'one_mat_counter_from', 'one_mat_counter_to', 'arabic_lessons_time', 'english_lessons_time'
    ];

    public function admin_name(){
        return $this->belongsTo("App\Models\User" , "name");
    }
}

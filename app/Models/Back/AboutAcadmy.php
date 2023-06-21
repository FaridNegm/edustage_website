<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class AboutAcadmy extends Model
{
    protected $table = 'about_acadmies';
    protected $fillable = ['title', 'group_id', 'description', 'media', 'status'];

    public function admin_name(){
        return $this->belongsTo("App\Models\User" , "name");
    }
}

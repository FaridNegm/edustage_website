<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['name', 'address', 'nat_id', 'birth_date', 'image', 'note', 'gender', 'status'];

    public function admin_name(){
        return $this->belongsTo("App\Models\User" , "name");
    }

}

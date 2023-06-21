<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesPermissions extends Model
{
    protected $table = 'roles_permissions';

    protected $fillable = [
        'code', 'name_ar', 'name_en', 'status', 'manager'
    ];
}

<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'app_name', 'description', 'lang', 'footer_text', 'address', 'city', 'zip_code', 'email', 'phone1', 'phone2', 'accept_cookies', 'logo_website', 'logo_dashboard', 'fav_icon', 'mail_driver', 'from', 'to', 'host', 'port', 'encryption', 'username', 'password', 'facebook', 'twitter', 'linked_in', 'google', 'tiktok', 'youtube'
    ];
}

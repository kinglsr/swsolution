<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function uploadFile($file = null) {
        $url = '';
        if ($file !== null) {
            $filename = $file->getClientOriginalName();
            $filepath = realpath('uploads')."/".$filename;
            //Move Uploaded File
            $destinationPath = 'uploads';
            $cloudOptions = ['resource_type' => 'auto']; // setting cloudinary options
            $publicId = null;
            if($file->move($destinationPath,$filename)) {
                \Cloudder::upload($filepath,$publicId,$cloudOptions);
                $result = \Cloudder::getResult();
                $url = $result['url'];
            }
        }
        return $url;
    }
}

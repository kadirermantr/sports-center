<?php


namespace App\Helpers;


use Illuminate\Support\Facades\DB;

class UploadPaths
{
    public static $uploadPaths = array(
        'gym_photos' => '/uploads/gyms_images',
    );

    //TODO: burasını gözden geçir
    public static function getUploadPath($path) {
        return public_path().self::$uploadPaths[$path];
    }

}

<?php

namespace App\Utilities\ImageUploader;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageUploader
{
    public static function upload($disk, $imageFile, $path)
    {
        Storage::disk($disk)->put($path, File::get($imageFile));

        return $path;
    }

    public static function multiUpload($disk, array $imageFiles, $basepath)
    {
        $paths = [];


        foreach ($imageFiles as $key => $file) {

            $fullpath = $basepath.$key.'_'.$file->getClientOriginalName();

            self::upload($disk, $file, $fullpath);

            $paths += [$key => $fullpath];
        }

        return $paths;
    }
}

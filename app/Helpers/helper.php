<?php

use Intervention\Image\Facades\Image;

if (!function_exists('upload_image')) {
    function upload_image($image, $path, $rekursif = true)
    {
        if ($image) {
            if (!is_dir($path)) {
                mkdir($path, 0755, $rekursif);
            }
            $imageName = time() . '.' . $image->extension();
            Image::make($image)->save($path . $imageName);
            return $imageName;
        }
    }
}

if (!function_exists('unlink_image')) {
    function unlink_image($path, $imageName)
    {
        $image = $path . $imageName;
        if (file_exists($image)) {
            @unlink($image);
        }
    }
}

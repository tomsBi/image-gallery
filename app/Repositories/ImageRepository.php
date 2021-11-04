<?php

namespace App\Repositories;

use App\Models\Image;

class ImageRepository
{
    public function getAllImages(): array
    {
        $folder_path = __DIR__."\..\..\\resources\assets\\";

        $files = glob($folder_path. "*.{png}", GLOB_BRACE);

        $images = [];

        foreach ($files as $file) {
            $images[] = new Image(
                str_replace(".png", "", str_replace(dirname($file)."\\", "", $file))
            );
        }

        $names = [];

        foreach ($images as $image){
            $names[] = $image->getImage();
        }

        array_multisort($names, SORT_ASC, $images);
        
        return $images;
    }

    public static function sortFunction()
    {
        //TODO: create sort function
    }
}
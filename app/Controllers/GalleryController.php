<?php

namespace App\Controllers;

use App\Repositories\ImageRepository;

class GalleryController
{
    public function index()
    {
        $images = (new ImageRepository())->getAllImages();

        return require_once __DIR__.'/../Views/HomeView.php';
    }
}
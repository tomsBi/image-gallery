<?php

namespace App\Models;

class Image
{
    private string $image;

    public function __construct(string $image)
    {
        $this->image = $image;
    }

    public function getImage(): int
    {
        return $this->image;
    }
}
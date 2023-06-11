<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    function uploadImage($image, $filePath)
    {
        if ($image && $image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            Storage::putFileAs($filePath, $image, $filename);
            return $filePath . '/' . $filename;
        }
        return null;
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageEditorController extends Controller
{
    public function upload(Request $request) {
        $path = Storage::disk('public')->put('images', $request->file('upload'));
        return [
            'url' => Storage::url($path)
        ];
    }
}

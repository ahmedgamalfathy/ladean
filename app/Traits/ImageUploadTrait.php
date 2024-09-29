<?php

namespace App\Traits;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait ImageUploadTrait
{
    public function uploadImage(Request $request, $inputname, $path)
    {

        if ($request->hasFile($inputname)) {

            //             Upload File
            $image = $request->{$inputname};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $ext;
            $image->move(public_path($path), $imageName);


            return $path . "/" . $imageName;

        }

    }


    public function updateImage(Request $request, $inputname, $path, $oldPath = null)
    {

        if ($request->hasFile($inputname)) {
            if (File::exists(public_path($oldPath))) {
                File::delete(public_path($oldPath));
            }

            //             Upload File
            $image = $request->{$inputname};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $ext;
            $image->move(public_path($path), $imageName);


            return $path . "/" . $imageName;

        }
    }

    public function deleteImage(string|null $path)
    {

            if (File::exists(public_path($path))) {
                File::delete(public_path($path));
            }


    }
}


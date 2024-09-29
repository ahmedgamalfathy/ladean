<?php

namespace App\Actions;

use Illuminate\Support\Facades\File;
use Image;

class UploadFile
{
    protected $file;
    protected string $path;
    protected string $type;

    public function __construct($file, $path, $type = '')
    {
        $this->file = $file;
        $this->path = $path;
        $this->type = $type;
    }

    public function __invoke(): string
    {
        //check if url
        if (filter_var($this->file, FILTER_VALIDATE_URL) === true || is_string($this->file)) {
            return $this->file;
        } else {
            //upload
            if (!file_exists($this->path)) {
                // path does not exist
                $full_path = '';
                $exploded_path = explode('/',$this->path);
                for ($x = 0;$x<count($exploded_path);$x++){
                    if ($x != 0 && $x!= count($exploded_path)-1){//not first and not last element
                        $full_path .='/'.$exploded_path[$x];
                    }elseif($x == 0){
                        $full_path .= $exploded_path[$x];
                    }
                    if(!file_exists($full_path)){
                        File::makeDirectory($full_path);
                    }
                }

            }
            $filename = time() . mt_rand(1000, 9999) . '_' . '.webp';
//            $filename = time() . mt_rand(1000, 9999) . '_' . $this->file->getClientOriginalName();

            if (in_array($this->type,['image','thumbnail'])) {
                //change image size
                $image = Image::make($this->file)->encode('webp', 100);
                if ($this->type == 'thumbnail'){
                    $image->resize(300, 200);
                }elseif (request('height') && request('width')){
//                    $image->resize(request('width'), request('height'));
                    $image->resize(request('width'), request('height'), function ($constraint) {
//                        $constraint->aspectRatio();
//                        $constraint->upsize();
                    });
                }
                $image->save($this->path . $filename);
            } else {
                //        $extension = $this->file->getClientOriginalExtension(); // getting image extension
                $this->file->move(public_path($this->path), $filename);
            }
            return $this->path . $filename;
        }//end else
    }
}

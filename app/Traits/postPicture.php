<?php

namespace App\Traits;

trait postPicture{
    public function postImage($request)
    {
        $file_extension = $request -> getclientoriginalextension();
        $name = time().'.'.$file_extension;
        $path = 'images/posts';
        $request -> move($path,$name);

        return $name;
    }
}

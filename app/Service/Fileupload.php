<?php

namespace App\Service;

class Fileupload{
    
    public function upload($file,$path){
        $profileImage = $file;
        $profileImageSaveAsName = time()  . "file." . $profileImage->getClientOriginalExtension();
        $upload_path = $path.'/';
        $profile_image_url = $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        return $upload_path.$profile_image_url;
    }
}
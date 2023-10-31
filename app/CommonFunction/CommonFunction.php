<?php

namespace App\CommonFunction;
use App\Models\Attachement;
use App\Traits\Upload;

class CommonFunction
{
    use Upload;

    public function insertOrUpdateImage($name,$type,$type_id,$imageUrl)
    {
        $profile_icon=Attachement::Where('type',$type)->Where('type_id',$type_id)->first();
        if($profile_icon)
        {
            
            $path = $this->UploadFile($imageUrl, 'images');
            $attachment=Attachement::find($profile_icon->id);
            $attachment->name=$name;
            $attachment->type=$type;
            $attachment->path=$path;
            $attachment->type_id=$type_id;
            $attachment->save();
        }
        else
        {
            $path = $this->UploadFile($imageUrl, 'images');
            $attachment=new Attachement();
            $attachment->name=$name;
            $attachment->type=$type;
            $attachment->path=$path;
            $attachment->type_id=$type_id;
            $attachment->save();

        }
    }
    
}
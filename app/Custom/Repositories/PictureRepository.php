<?php

namespace App\Custom\Repositories;

use Illuminate\Support\Facades\Storage;

class PictureRepository 
{
    private $defaultPicture;

    function __construct() {
        $this->defaultPicture = config('constants.default_picture');
    }

    public function getDefaultPicture()
    {
        return $this->defaultPicture;
    }

    public function addNewPicture($request, $fieldName='picture')
    {
        $picture = $request->file($fieldName);

        if (empty($picture) || $picture == $this->defaultPicture)
        {
            return $this->defaultPicture;
        }

        $path = $picture->store('dogs');
        return $path;
    }

    public function changePicture($oldPicture, $request, $fieldName='picture')
    {
        $newPicture = $request->file($fieldName);
        if ($oldPicture == $newPicture)
        {
            return $oldPicture;
        }
        
        $this->deletePicture($oldPicture);
        return $this->addNewPicture($request);
    }

    public function deletePicture($picture)
    {
        if ($picture == $this->defaultPicture)
        {
            return;
        }

        Storage::delete($picture);
    }

}

?>

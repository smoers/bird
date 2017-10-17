<?php
/**
 * Copyright (c) 2017.  Bird Web
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace ORG\BirdBundle\Model\Upload;

use ORG\BirdBundle\Model\Elements\ImageRoot;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 19/06/2017
 * Time: 13:01
 */

/**
 * Classe utilisée par les formulaires pour remonter une image
 * Class UploadedImage
 */
class UploadedImage extends ImageRoot
{

    private $uploadedFile;

    /**
     * UploadedImage constructor.
     * @param $destinationFolder
     */
    public function __construct($destinationFolder)
    {
        parent::__construct();
        parent::setImagePath($destinationFolder);
        $this->uploadedFile = null;
    }

    /**
     * @param $fileName
     */
    public function move($fileName)
    {
        if (null !== $this->uploadedFile && !empty($fileName) && null !== $fileName){
            $fileName = $fileName.'.'. $this->uploadedFile->guessExtension();
            $this->uploadedFile->move(parent::getImagePath(), $fileName);
        }
    }

    /**
     * @param mixed $uploadedFile
     */
    public function setUploadedFile(uploadedFile $uploadedFile)
    {
        $this->uploadedFile = $uploadedFile;
    }
}
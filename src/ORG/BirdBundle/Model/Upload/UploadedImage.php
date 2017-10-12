<?php
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
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

/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 18/07/2017
 * Time: 12:31
 */

namespace ORG\BirdBundle\Model\Elements;


class ImageRoot
{

    protected $imageName;
    protected $imagePath;
    public $imageExtension = array('jpg', 'png','jpeg');

    public function __construct()
    {
        $this->imageName = null;
        $this->imagePath = null;
    }

    /**
     * @return null
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @param null $imageName
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * @return null
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * @param null $imagePath
     */
    public function setImagePath($imagePath)
    {
        if(preg_match('/\/(?!.*\/).[\S]+/',$imagePath)){
            $imagePath = $imagePath."/";
        }
        $this->imagePath = $imagePath;
    }

    /**
     * retourne le chemin et le nom avec extension du fichier image.
     * Si un nom est passé en parametre, s'est celui-ci qui est utilisé.
     * Si aucun nom n'est passé en parametre et que le parametre imageName est null
     * le résultat sera un NULL
     * @param null $name
     * @return null|string
     */
    public function getFullPath($name = null)
    {
        $nameWithExtension = null;

        if (!is_null($name)){
             $nameWithExtension = $name;
        }
        elseif(!is_null($this->imageName)){
            $nameWithExtension = $this->imageName;
        }
        else{
            return null;
        }

        $nameWithExtension = $this->getNameWithExtension($nameWithExtension);
        if(is_null($nameWithExtension)){
            return null;
        }

        return $this->imagePath.$nameWithExtension;
    }

    /**
     * Cette méthode va s'assurer q'un fichier image existe
     * sur le chemin defini avec une des extensions autorisées
     * @param $name
     * @return null|string
     */
    public function getNameWithExtension($name)
    {
        $return = null;

        foreach ($this->imageExtension as $ext){
            if (file_exists($this->imagePath.$name.'.'.$ext)){
                $return = $name.'.'.$ext;
                return $return;
            }
        }
        return $return;
    }

}
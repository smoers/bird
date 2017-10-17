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
 * Date: 31/07/2017
 * Time: 12:42
 */
namespace ORG\BirdBundle\Model\Menu;


/**
 * Cette classe est utilisée pour gérer le menu principal
 * Elle doit être passé au template Twig
 * Class MenuDisabledTwig
 * @package ORG\BirdBundle\Model\Menu
 */
class MenuDisabledTwig
{

    private $items;

    /**
     * MenuDisabledTwig constructor.
     */
    public function __construct()
    {
        $this->items = array();
    }

    /**
     * défini quelle sont les item du menu à mettre en disbaled.
     * @param $itemId
     */
    public function setDisabled(array $itemIds)
    {
        foreach ($itemIds as $itemId) {
            $this->items[$itemId] = true;
        }
    }

    /**
     * Indique si l'item Id passé en paramêtre doit être disabled dans le menu
     * @param $itemId
     * @return bool|mixed
     */
    public function isDisabled($itemId)
    {
        if(array_key_exists($itemId, $this->items)){
            return $this->items[$itemId];
        }
        else{
            return false;
        }
    }

    /**
     * @param $itemId
     * @return string
     */
    public function getDisabled($itemId)
    {
        if($this->isDisabled($itemId)){
            return 'pointer-events: none; opacity: 0.4';
        }
    }

}
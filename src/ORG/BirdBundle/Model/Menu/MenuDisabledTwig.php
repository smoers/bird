<?php
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
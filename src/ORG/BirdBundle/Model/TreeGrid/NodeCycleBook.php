<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 23/11/2017
 * Time: 12:54
 */

namespace ORG\BirdBundle\Model\TreeGrid;


class NodeCycleBook
{

    private $fields;

    /**
     * NodeCycleBook constructor.
     */
    public function __construct()
    {
        $this->fields = array();
        $this->fields['id'] = 0;
        $this->fields['children'] = null;
        $this->fields['state'] = 'closed';
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->fields['id'] = $id;
    }

    /**
     * @param NodeCycleBook $child
     */
    public function setChildren(NodeCycleBook $child){
        //Premier ajout on defini l'array
        if(!is_array($this->fields['children'])){
            $this->fields['children'] = array();
        }
        array_push($this->fields['children'],$child);
    }

    /**
     * @param $state
     */
    public function setState($state)
    {
        $this->fields['state'] = $state;
    }

    /**
     * @param $key
     * @param $value
     */
    public function push($key, $value)
    {
        $this->fields[$key] = $value;
    }

    /**
     * @return array
     */
    public function getForJson()
    {
        if($this->fields['children'] === null){
            unset($this->fields['children']);
            unset($this->fields['state']);
        }
        else{
            $children = array();
            foreach ($this->fields['children'] as $child){
                array_push($children,$child->getForJson());
            }
            $this->fields['children'] = $children;
        }

        return $this->fields;
    }


}
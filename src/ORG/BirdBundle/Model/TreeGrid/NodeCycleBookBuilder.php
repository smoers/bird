<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 24/11/2017
 * Time: 12:52
 */

namespace ORG\BirdBundle\Model\TreeGrid;


use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;

class NodeCycleBookBuilder
{

    private $nodes;
    private $cycles;

    public function __construct(array $cycles)
    {
        $this->cycles = $cycles;
        $this->nodes = array();
    }

    /**
     *
     */
    public function build()
    {
        foreach ($this->cycles as $cycle){
            $nodeC = new NodeCycleBook();
            if($cycle->getYncycle()){
                /**
                 * Nous avons affaire à un cycle
                 */
                $nodeC->setId($cycle->getId());
                $nodeC->push(('Title'), $cycle->getTitle());
                $nodeC->push('Volume', $cycle->getNbrvolume());
                $nodeC->push('iconCls','icon-cycle');
                $nodeC->push('Cycle',$cycle->getYncycle());
                foreach ($cycle->getBooks() as $book){
                    $nodeB = new NodeCycleBook();
                    $nodeB->setId($book->getId());
                    $nodeB->push('Title', $book->getTitle());
                    $nodeB->push('Volume', $book->getVolume());
                    $nodeB->push('Format',$book->getFormat()->getValue());
                    $nodeB->push('Editor', $book->getEditor());
                    $nodeB->push('Collection', $book->getCollection());
                    $nodeB->push('Cycle',false);
                    $nodeC->setChildren($nodeB);
                }
            }
            else{
                /**
                 * Nous avons affaire à un livre
                 */
                $book = $cycle->getbooks()->First();
                $nodeC->setId($book->getId());
                $nodeC->push('Title', $book->getTitle());
                $nodeC->push('Volume', $book->getVolume());
                $nodeC->push('Format',$book->getFormat()->getValue());
                $nodeC->push('Editor', $book->getEditor());
                $nodeC->push('Collection', $book->getCollection());
                $nodeC->push('Cycle',$cycle->getYncycle());
            }
            array_push($this->nodes,$nodeC);
        }
    }

    public function getForJson()
    {
        $return = array();
        foreach ($this->nodes as $node){
            array_push($return, $node->getForJson());
        }
        /*
        $dumper = new HtmlDumper();
        $cloner = new VarCloner();
        $dumper->dump($cloner->cloneVar($return));*/
        return $return;
    }
}
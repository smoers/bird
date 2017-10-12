<?php
/**
* Group.php
* Sabena Aerospace
* Author : Moers Serge
* Date : 31 Mar 2017
*/
namespace ORG\BirdBundle\Entity\Security;

use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_group")
 */
class Group extends BaseGroup
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
}
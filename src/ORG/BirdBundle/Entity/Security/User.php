<?php
/**
* User.php
* Sabena Aerospace
* Author : Moers Serge
* Date : 31 Mar 2017
*/

namespace ORG\BirdBundle\Entity\Security;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\ManyToMany(targetEntity="ORG\BirdBundle\Entity\Security\Group")
	 * @ORM\JoinTable(name="fos_user_user_group",
	 *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
	 *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
	 * )
	 */
	protected $groups;
	
	public function __construct()
	{
		parent::__construct();
		// your own logic
	}
}
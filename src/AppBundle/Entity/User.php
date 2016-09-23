<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

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
    * @ORM\OneToOne(targetEntity="User")
    * @ORM\JoinColumn(name="pere_id", referencedColumnName="id")
    */
    public $pere;
     /**
    * @ORM\OneToOne(targetEntity="User")
    * @ORM\JoinColumn(name="mere_id", referencedColumnName="id")
    */
    public $mere;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set pere
     *
     * @param \AppBundle\Entity\Programme $pere
     *
     * @return User
     */
    public function setPere(\AppBundle\Entity\Programme $pere = null)
    {
        $this->pere = $pere;

        return $this;
    }

    /**
     * Get pere
     *
     * @return \AppBundle\Entity\Programme
     */
    public function getPere()
    {
        return $this->pere;
    }

    /**
     * Set mere
     *
     * @param \AppBundle\Entity\Programme $mere
     *
     * @return User
     */
    public function setMere(\AppBundle\Entity\Programme $mere = null)
    {
        $this->mere = $mere;

        return $this;
    }

    /**
     * Get mere
     *
     * @return \AppBundle\Entity\Programme
     */
    public function getMere()
    {
        return $this->mere;
    }
}

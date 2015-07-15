<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $fio;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $email;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set fio
     *
     * @param string $fio
     * @return User
     */
    public function setFio($fio)
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * Get fio
     *
     * @return string 
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $travel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dam;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->travel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dam = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add travel
     *
     * @param \Bundles\StoreBundle\Entity\Travel $travel
     * @return User
     */
    public function addTravel(\Bundles\StoreBundle\Entity\Travel $travel)
    {
        $this->travel[] = $travel;

        return $this;
    }

    /**
     * Remove travel
     *
     * @param \Bundles\StoreBundle\Entity\Travel $travel
     */
    public function removeTravel(\Bundles\StoreBundle\Entity\Travel $travel)
    {
        $this->travel->removeElement($travel);
    }

    /**
     * Get travel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTravel()
    {
        return $this->travel;
    }

    /**
     * Add dam
     *
     * @param \Bundles\StoreBundle\Entity\Dam $dam
     * @return User
     */
    public function addDam(\Bundles\StoreBundle\Entity\Dam $dam)
    {
        $this->dam[] = $dam;

        return $this;
    }

    /**
     * Remove dam
     *
     * @param \Bundles\StoreBundle\Entity\Dam $dam
     */
    public function removeDam(\Bundles\StoreBundle\Entity\Dam $dam)
    {
        $this->dam->removeElement($dam);
    }

    /**
     * Get dam
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDam()
    {
        return $this->dam;
    }
}

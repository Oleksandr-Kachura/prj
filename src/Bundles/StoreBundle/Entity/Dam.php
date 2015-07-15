<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dam
 */
class Dam
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var integer
     */
    private $travelId;


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
     * Set name
     *
     * @param string $name
     * @return Dam
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Dam
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Dam
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set travelId
     *
     * @param integer $travelId
     * @return Dam
     */
    public function setTravelId($travelId)
    {
        $this->travelId = $travelId;

        return $this;
    }

    /**
     * Get travelId
     *
     * @return integer 
     */
    public function getTravelId()
    {
        return $this->travelId;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $photo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $geotag;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tag;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->photo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->geotag = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tag = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add photo
     *
     * @param \Bundles\StoreBundle\Entity\Photo $photo
     * @return Dam
     */
    public function addPhoto(\Bundles\StoreBundle\Entity\Photo $photo)
    {
        $this->photo[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \Bundles\StoreBundle\Entity\Photo $photo
     */
    public function removePhoto(\Bundles\StoreBundle\Entity\Photo $photo)
    {
        $this->photo->removeElement($photo);
    }

    /**
     * Get photo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Add geotag
     *
     * @param \Bundles\StoreBundle\Entity\GeoTag $geotag
     * @return Dam
     */
    public function addGeotag(\Bundles\StoreBundle\Entity\GeoTag $geotag)
    {
        $this->geotag[] = $geotag;

        return $this;
    }

    /**
     * Remove geotag
     *
     * @param \Bundles\StoreBundle\Entity\GeoTag $geotag
     */
    public function removeGeotag(\Bundles\StoreBundle\Entity\GeoTag $geotag)
    {
        $this->geotag->removeElement($geotag);
    }

    /**
     * Get geotag
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGeotag()
    {
        return $this->geotag;
    }

    /**
     * Add tag
     *
     * @param \Bundles\StoreBundle\Entity\Tag $tag
     * @return Dam
     */
    public function addTag(\Bundles\StoreBundle\Entity\Tag $tag)
    {
        $this->tag[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \Bundles\StoreBundle\Entity\Tag $tag
     */
    public function removeTag(\Bundles\StoreBundle\Entity\Tag $tag)
    {
        $this->tag->removeElement($tag);
    }

    /**
     * Get tag
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTag()
    {
        return $this->tag;
    }
    /**
     * @var \Bundles\StoreBundle\Entity\Travel
     */
    private $travel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;


    /**
     * Set travel
     *
     * @param \Bundles\StoreBundle\Entity\Travel $travel
     * @return Dam
     */
    public function setTravel(\Bundles\StoreBundle\Entity\Travel $travel = null)
    {
        $this->travel = $travel;

        return $this;
    }

    /**
     * Get travel
     *
     * @return \Bundles\StoreBundle\Entity\Travel 
     */
    public function getTravel()
    {
        return $this->travel;
    }

    /**
     * Add user
     *
     * @param \Bundles\StoreBundle\Entity\User $user
     * @return Dam
     */
    public function addUser(\Bundles\StoreBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Bundles\StoreBundle\Entity\User $user
     */
    public function removeUser(\Bundles\StoreBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}

<?php

namespace Application\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 *
 * Sample user entity that I use in my own projects.  Might help?
 *
 * @ORM\Entity
 * @ORM\Table(name="user")
 *
 */
class User
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", nullable=false, options={"unsigned"=true})
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=64)
     */
    protected $name;

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }



}
<?php

namespace App\Entity;

use Mazarini\UserBundle\Entity\SecurityAbstract;
use Mazarini\UserBundle\Entity\EmailTrait;
use Doctrine\ORM\Mapping as ORM;

class User extends SecurityAbstract
{
    use EmailTrait;

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     *
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }
}

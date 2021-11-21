<?php

namespace Mazarini\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
trait EmailTrait
{
    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email='';

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}

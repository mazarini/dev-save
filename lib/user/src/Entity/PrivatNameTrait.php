<?php

namespace Mazarini\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
trait PrivatNameTrait
{
    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $privatName='';

    public function getPrivatName(): string
    {
        return $this->privatName;
    }

    public function setPrivatName(string $privatName): self
    {
        $this->privatName = $privatName;

        return $this;
    }
}

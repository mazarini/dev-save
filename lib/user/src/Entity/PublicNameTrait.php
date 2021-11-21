<?php

namespace Mazarini\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
trait PublicNameTrait
{
    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $publicName;

    public function getPublicName(): string
    {
        return $this->publicName;
    }

    public function setPublicName(string $publicName): self
    {
        $this->publicName = $publicName;

        return $this;
    }
}

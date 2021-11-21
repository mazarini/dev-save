<?php

namespace Mazarini\ToolsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

trait EntityTrait
{
    /**
     * id

     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id=0;

    public function getId(): int{
        return $this->id;
    }


    public function isNew(): bool {
        return $this->id === 0;
    }
}

<?php

namespace Mazarini\ToolsBundle\Entity;

trait EntityTrait
{
    private $id=0;

    public function getId(): int{
        return $this->id;
    }


    public function isNew(): bool {
        return $this->id === 0;
    }
}

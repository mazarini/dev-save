<?php

namespace Mazarini\ToolsBundle\Entity;

interface EntityInterface
{
    /**
     * getId : get id
     *
     * @return int
     */
    public function getId(): int;

    /**
     * isNew : return true if entity exists in database.
     *
     * @return bool
     */
    public function isNew(): bool;
}

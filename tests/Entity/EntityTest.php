<?php

namespace App\Tests\Entity;

use Mazarini\ToolsBundle\Entity\Entity;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class EntityTest extends TestCase
{
    /**
     * testNewEntity.
     */
    public function testNewEntity(): void
    {
        $entity = new Entity();
        $this->assertSame($entity->getId(), 0);
        $this->assertTrue($entity->isNew());
    }

    /**
     * testEntity.
     */
    public function testEntity(): void
    {
        $entity = new Entity();
        $reflectionClass = new ReflectionClass(Entity::class);
        $reflectionProperty = $reflectionClass->getProperty('id');
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($entity, 1);

        $this->assertSame($entity->getId(), 1);
        $this->assertFalse($entity->isNew());
    }
}

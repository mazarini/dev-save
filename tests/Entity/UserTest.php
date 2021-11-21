<?php

namespace App\Tests\Entity;

use App\Entity\User;
use Mazarini\ToolsBundle\Entity\Entity;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class UserTest extends TestCase
{
    /**
     * testNewEntity.
     */
    public function testNewEntity(): void
    {
        $entity = new User();
        $this->assertSame($entity->getId(), 0);
        $this->assertTrue($entity->isNew());
    }

    /**
     * testEntity.
     */
    public function testEntity(): void
    {
        $entity = new User();
        $reflectionClass = new ReflectionClass(Entity::class);
        $reflectionProperty = $reflectionClass->getProperty('id');
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($entity, 1);

        $this->assertSame($entity->getId(), 1);
        $this->assertFalse($entity->isNew());
    }

    /**
     * @dataProvider getProperty
     */
    public function testProperty(string $property, mixed $value=NULL): void
    {
        $entity = new User();

        if ($value === NULL) {
            $value = strtolower($property);
        }
        $getter = 'get'.$property;
        $setter = 'set'.$property;
        $entity->$setter($value);
        $this->assertSame($entity->$getter(), $value);
    }

    /**
     * getUrls.
     *
     * @return \Traversable<array>
     */
    public function getProperty(): \Traversable
    {
        yield ['Email'];
        yield ['Password'];
    }

}

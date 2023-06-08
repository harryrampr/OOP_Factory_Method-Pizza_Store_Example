<?php

namespace Tests\Ingredients;

use App\Ingredients\Onion;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class OnionTest
 *
 * @covers \Onion
 */
class OnionTest extends TestCase
{
    /**
     * @covers \Onion
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(Onion::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Veggies', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \Onion::__construct
     * @covers \Veggies::__construct
     */
    public function testOnionConstructor(): void
    {
        $onion = new Onion();

        $reflectionClass = new ReflectionClass(Onion::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Onion', $descriptionProperty->getValue($onion));
    }

    /**
     * @covers \Onion::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(Onion::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
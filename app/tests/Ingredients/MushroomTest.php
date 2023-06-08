<?php

namespace Tests\Ingredients;

use App\Ingredients\Mushroom;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class MushroomTest
 *
 * @covers \Mushroom
 */
class MushroomTest extends TestCase
{
    /**
     * @covers \Mushroom
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(Mushroom::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Veggies', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \Mushroom::__construct
     * @covers \Veggies::__construct
     */
    public function testMushroomConstructor(): void
    {
        $mushroom = new Mushroom();

        $reflectionClass = new ReflectionClass(Mushroom::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Mushroom', $descriptionProperty->getValue($mushroom));
    }

    /**
     * @covers \Mushroom::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(Mushroom::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
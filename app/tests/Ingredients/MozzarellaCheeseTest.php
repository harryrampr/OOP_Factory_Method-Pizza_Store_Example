<?php

namespace Tests\Ingredients;

use App\Ingredients\MozzarellaCheese;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class MozzarellaCheeseTest
 *
 * @covers \MozzarellaCheese
 */
class MozzarellaCheeseTest extends TestCase
{
    /**
     * @covers \MozzarellaCheese
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(MozzarellaCheese::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Cheese', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \MozzarellaCheese::__construct
     * @covers \Cheese::__construct
     */
    public function testMozzarellaCheeseConstructor(): void
    {
        $mozzarellaCheese = new MozzarellaCheese();

        $reflectionClass = new ReflectionClass(MozzarellaCheese::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Mozzarella Cheese', $descriptionProperty->getValue($mozzarellaCheese));
    }

    /**
     * @covers \MozzarellaCheese::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(MozzarellaCheese::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
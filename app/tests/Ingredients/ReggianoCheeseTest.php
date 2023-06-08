<?php

namespace Tests\Ingredients;

use App\Ingredients\ReggianoCheese;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class ReggianoCheeseTest
 *
 * @covers \ReggianoCheese
 */
class ReggianoCheeseTest extends TestCase
{
    /**
     * @covers \ReggianoCheese
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(ReggianoCheese::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Cheese', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \ReggianoCheese::__construct
     * @covers \Cheese::__construct
     */
    public function testReggianoCheeseConstructor(): void
    {
        $reggianoCheese = new ReggianoCheese();

        $reflectionClass = new ReflectionClass(ReggianoCheese::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Reggiano Cheese', $descriptionProperty->getValue($reggianoCheese));
    }

    /**
     * @covers \ReggianoCheese::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(ReggianoCheese::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
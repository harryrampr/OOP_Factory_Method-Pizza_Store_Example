<?php

namespace Tests\Ingredients;

use App\Ingredients\Garlic;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class GarlicTest
 *
 * @covers \Garlic
 */
class GarlicTest extends TestCase
{
    /**
     * @covers \Garlic
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(Garlic::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Veggies', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \Garlic::__construct
     * @covers \Veggies::__construct
     */
    public function testGarlicConstructor(): void
    {
        $garlic = new Garlic();

        $reflectionClass = new ReflectionClass(Garlic::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Garlic', $descriptionProperty->getValue($garlic));
    }

    /**
     * @covers \Garlic::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(Garlic::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
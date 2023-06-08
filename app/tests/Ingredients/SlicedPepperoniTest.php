<?php

namespace Tests\Ingredients;

use App\Ingredients\SlicedPepperoni;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class SlicedPepperoniTest
 *
 * @covers \SlicedPepperoni
 */
class SlicedPepperoniTest extends TestCase
{
    /**
     * @covers \SlicedPepperoni
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(SlicedPepperoni::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Pepperoni', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \SlicedPepperoni::__construct
     * @covers \Pepperoni::__construct
     */
    public function testSlicedPepperoniConstructor(): void
    {
        $slicedPepperoni = new SlicedPepperoni();

        $reflectionClass = new ReflectionClass(SlicedPepperoni::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Sliced Pepperoni', $descriptionProperty->getValue($slicedPepperoni));
    }

    /**
     * @covers \SlicedPepperoni::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(SlicedPepperoni::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
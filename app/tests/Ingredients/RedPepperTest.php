<?php

namespace Tests\Ingredients;

use App\Ingredients\RedPepper;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class RedPepperTest
 *
 * @covers \RedPepper
 */
class RedPepperTest extends TestCase
{
    /**
     * @covers \RedPepper
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(RedPepper::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Veggies', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \RedPepper::__construct
     * @covers \Veggies::__construct
     */
    public function testRedPepperConstructor(): void
    {
        $redPepper = new RedPepper();

        $reflectionClass = new ReflectionClass(RedPepper::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Red Pepper', $descriptionProperty->getValue($redPepper));
    }

    /**
     * @covers \RedPepper::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(RedPepper::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
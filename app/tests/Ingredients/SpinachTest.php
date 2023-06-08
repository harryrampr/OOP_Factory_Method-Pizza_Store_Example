<?php

namespace Tests\Ingredients;

use App\Ingredients\Spinach;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class SpinachTest
 *
 * @covers \Spinach
 */
class SpinachTest extends TestCase
{
    /**
     * @covers \Spinach
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(Spinach::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Veggies', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \Spinach::__construct
     * @covers \Veggies::__construct
     */
    public function testSpinachConstructor(): void
    {
        $spinach = new Spinach();

        $reflectionClass = new ReflectionClass(Spinach::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Spinach', $descriptionProperty->getValue($spinach));
    }

    /**
     * @covers \Spinach::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(Spinach::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
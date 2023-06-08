<?php

namespace Tests\Ingredients;

use App\Ingredients\BlackOlives;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class BlackOlivesTest
 *
 * @covers \BlackOlives
 */
class BlackOlivesTest extends TestCase
{
    /**
     * @covers \BlackOlives
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(BlackOlives::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Veggies', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \BlackOlives::__construct
     * @covers \Veggies::__construct
     */
    public function testBlackOlivesConstructor(): void
    {
        $blackOlives = new BlackOlives();

        $reflectionClass = new ReflectionClass(BlackOlives::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Black Olives', $descriptionProperty->getValue($blackOlives));
    }

    /**
     * @covers \BlackOlives::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(BlackOlives::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
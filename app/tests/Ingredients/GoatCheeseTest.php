<?php

namespace Tests\Ingredients;

use App\Ingredients\GoatCheese;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class GoatCheeseTest
 *
 * @covers \GoatCheese
 */
class GoatCheeseTest extends TestCase
{
    /**
     * @covers \GoatCheese
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(GoatCheese::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Cheese', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \GoatCheese::__construct
     * @covers \Cheese::__construct
     */
    public function testGoatCheeseConstructor(): void
    {
        $goatCheese = new GoatCheese();

        $reflectionClass = new ReflectionClass(GoatCheese::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Goat Cheese', $descriptionProperty->getValue($goatCheese));
    }

    /**
     * @covers \GoatCheese::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(GoatCheese::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
<?php

namespace Tests\Ingredients;

use App\Ingredients\PlumTomatoSauce;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class PlumTomatoSauceTest
 *
 * @covers \PlumTomatoSauce
 */
class PlumTomatoSauceTest extends TestCase
{
    /**
     * @covers \PlumTomatoSauce
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(PlumTomatoSauce::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Sauce', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \PlumTomatoSauce::__construct
     * @covers \Sauce::__construct
     */
    public function testPlumTomatoSauceConstructor(): void
    {
        $plumTomatoSauce = new PlumTomatoSauce();

        $reflectionClass = new ReflectionClass(PlumTomatoSauce::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Plum Tomato Sauce', $descriptionProperty->getValue($plumTomatoSauce));
    }

    /**
     * @covers \PlumTomatoSauce::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(PlumTomatoSauce::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
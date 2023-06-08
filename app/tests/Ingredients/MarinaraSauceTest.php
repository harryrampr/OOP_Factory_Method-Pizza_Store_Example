<?php

namespace Tests\Ingredients;

use App\Ingredients\MarinaraSauce;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class MarinaraSauceTest
 *
 * @covers \MarinaraSauce
 */
class MarinaraSauceTest extends TestCase
{
    /**
     * @covers \MarinaraSauce
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(MarinaraSauce::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Sauce', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \MarinaraSauce::__construct
     * @covers \Sauce::__construct
     */
    public function testMarinaraSauceConstructor(): void
    {
        $marinaraSauce = new MarinaraSauce();

        $reflectionClass = new ReflectionClass(MarinaraSauce::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Marinara Sauce', $descriptionProperty->getValue($marinaraSauce));
    }

    /**
     * @covers \MarinaraSauce::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(MarinaraSauce::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
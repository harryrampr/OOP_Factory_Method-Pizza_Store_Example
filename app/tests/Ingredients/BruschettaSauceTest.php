<?php

namespace Tests\Ingredients;

use App\Ingredients\BruschettaSauce;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class BruschettaSauceTest
 *
 * @covers \BruschettaSauce
 */
class BruschettaSauceTest extends TestCase
{
    /**
     * @covers \BruschettaSauce
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(BruschettaSauce::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Sauce', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \BruschettaSauce::__construct
     * @covers \Sauce::__construct
     */
    public function testBruschettaSauceConstructor(): void
    {
        $bruschettaSauce = new BruschettaSauce();

        $reflectionClass = new ReflectionClass(BruschettaSauce::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Bruschetta Sauce', $descriptionProperty->getValue($bruschettaSauce));
    }

    /**
     * @covers \BruschettaSauce::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(BruschettaSauce::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
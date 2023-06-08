<?php

namespace Tests\Ingredients;

use App\Ingredients\FreshClams;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class FreshClamsTest
 *
 * @covers \FreshClams
 */
class FreshClamsTest extends TestCase
{
    /**
     * @covers \FreshClams
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(FreshClams::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Clams', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \FreshClams::__construct
     * @covers \Clams::__construct
     */
    public function testFreshClamsConstructor(): void
    {
        $freshClams = new FreshClams();

        $reflectionClass = new ReflectionClass(FreshClams::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Fresh Clams', $descriptionProperty->getValue($freshClams));
    }

    /**
     * @covers \FreshClams::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(FreshClams::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
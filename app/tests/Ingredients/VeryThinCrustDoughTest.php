<?php

namespace Tests\Ingredients;

use App\Ingredients\VeryThinCrustDough;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class VeryThinCrustDoughTest
 *
 * @covers \VeryThinCrustDough
 */
class VeryThinCrustDoughTest extends TestCase
{
    /**
     * @covers \VeryThinCrustDough
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(VeryThinCrustDough::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Dough', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \VeryThinCrustDough::__construct
     * @covers \Dough::__construct
     */
    public function testVeryThinCrustDoughConstructor(): void
    {
        $veryThinCrustDough = new VeryThinCrustDough();

        $reflectionClass = new ReflectionClass(VeryThinCrustDough::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Very Thin Crust Dough', $descriptionProperty->getValue($veryThinCrustDough));
    }

    /**
     * @covers \VeryThinCrustDough::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(VeryThinCrustDough::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
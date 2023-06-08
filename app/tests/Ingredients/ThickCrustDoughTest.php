<?php

namespace Tests\Ingredients;

use App\Ingredients\ThickCrustDough;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class ThickCrustDoughTest
 *
 * @covers \ThickCrustDough
 */
class ThickCrustDoughTest extends TestCase
{
    /**
     * @covers \ThickCrustDough
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(ThickCrustDough::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Dough', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \ThickCrustDough::__construct
     * @covers \Dough::__construct
     */
    public function testThickCrustDoughConstructor(): void
    {
        $thickCrustDough = new ThickCrustDough();

        $reflectionClass = new ReflectionClass(ThickCrustDough::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Thick Crust Dough', $descriptionProperty->getValue($thickCrustDough));
    }

    /**
     * @covers \ThickCrustDough::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(ThickCrustDough::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
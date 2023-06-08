<?php

namespace Tests\Ingredients;

use App\Ingredients\ThinCrustDough;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class ThinCrustDoughTest
 *
 * @covers \ThinCrustDough
 */
class ThinCrustDoughTest extends TestCase
{
    /**
     * @covers \ThinCrustDough
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(ThinCrustDough::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Dough', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \ThinCrustDough::__construct
     * @covers \Dough::__construct
     */
    public function testThinCrustDoughConstructor(): void
    {
        $thinCrustDough = new ThinCrustDough();

        $reflectionClass = new ReflectionClass(ThinCrustDough::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Thin Crust Dough', $descriptionProperty->getValue($thinCrustDough));
    }

    /**
     * @covers \ThinCrustDough::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(ThinCrustDough::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
<?php

namespace Tests\Ingredients;

use App\Ingredients\FrozenClam;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class FrozenClamTest
 *
 * @covers \FrozenClam
 */
class FrozenClamTest extends TestCase
{
    /**
     * @covers \FrozenClam
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(FrozenClam::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Clams', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \FrozenClam::__construct
     * @covers \Clams::__construct
     */
    public function testFrozenClamConstructor(): void
    {
        $frozenClam = new FrozenClam();

        $reflectionClass = new ReflectionClass(FrozenClam::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Frozen Clam', $descriptionProperty->getValue($frozenClam));
    }

    /**
     * @covers \FrozenClam::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(FrozenClam::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}
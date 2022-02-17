<?php

declare(strict_types=1);

namespace Zlodes\ProtobufDemo;

error_reporting(E_ALL ^ E_DEPRECATED);

use Demo\Foo;
use PHPUnit\Framework\TestCase;

final class TestBigNumbers extends TestCase
{
    public function testFixed64(): void
    {
        $foo = new Foo();

        /**
         * Max uint64 value: 2^64-1
         * @see https://en.wikipedia.org/wiki/Integer_(computer_science)#Long_integer
         */
        $value = '18446744073709551615'; // max uint64 value: 2^64-1

        $foo->setFixed64($value);

        self::assertEquals(
            $value,
            $foo->getFixed64() // It returns 9223372036854775807 (PHP_INT_MAX)
        );
    }

    public function testUint64(): void
    {
        $foo = new Foo();

        /**
         * Max uint64 value: 2^64-1
         * @see https://en.wikipedia.org/wiki/Integer_(computer_science)#Long_integer
         */
        $value = '18446744073709551615'; // max uint64 value: 2^64-1

        $foo->setUint64($value);

        self::assertEquals(
            $value,
            $foo->getUint64() // It returns 9223372036854775807 (PHP_INT_MAX)
        );
    }
}

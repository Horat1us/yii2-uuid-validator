<?php

declare(strict_types=1);

namespace Horat1us\Yii\Tests;

use Horat1us\Yii\UuidValidator;
use PHPUnit\Framework\TestCase;

/**
 * Class UuidValidatorTest
 * @package Horat1us\Yii\Tests
 */
class UuidValidatorTest extends TestCase
{
    public function testDefaultMessage(): void
    {
        $validator = new UuidValidator;
        $this->assertEquals('{attribute} is invalid.', $validator->message);
    }

    public function testNotOverrideDefaultMessage(): void
    {
        $testMessage = 'Test Message.';
        $validator = new UuidValidator([
            'message' => $testMessage,
        ]);

        $this->assertEquals($testMessage, $validator->message);
    }

    public function testFailInvalidUuid(): void
    {
        $validator = new UuidValidator;
        $error = null;

        $result = $validator->validate('SomeShit', $error);
        $this->assertFalse($result);
        $this->assertEquals('the input value is invalid.', $error);
    }

    public function testSuccessfulValidation(): void
    {
        $validator = new UuidValidator;
        $error = null;

        $result = $validator->validate('26743257-e90f-46af-ad77-9cbcccd9488b', $error);

        $this->assertTrue($result);
        $this->assertNull($error);
    }
}

<?php
/**
 * Tests for SimPulse
 */

use PHPUnit\Framework\TestCase;
use Simpulse\Simpulse;

class SimpulseTest extends TestCase {
    private Simpulse $instance;

    protected function setUp(): void {
        $this->instance = new Simpulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Simpulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

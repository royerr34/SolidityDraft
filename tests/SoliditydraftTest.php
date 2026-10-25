<?php
/**
 * Tests for SolidityDraft
 */

use PHPUnit\Framework\TestCase;
use Soliditydraft\Soliditydraft;

class SoliditydraftTest extends TestCase {
    private Soliditydraft $instance;

    protected function setUp(): void {
        $this->instance = new Soliditydraft(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditydraft::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

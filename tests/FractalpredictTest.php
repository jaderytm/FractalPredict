<?php
/**
 * Tests for FractalPredict
 */

use PHPUnit\Framework\TestCase;
use Fractalpredict\Fractalpredict;

class FractalpredictTest extends TestCase {
    private Fractalpredict $instance;

    protected function setUp(): void {
        $this->instance = new Fractalpredict(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fractalpredict::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

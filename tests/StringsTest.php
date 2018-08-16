<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class StringsTest extends TestCase
{
    private $testString = "abcdefghijklmnopqrstuvwxyz";

    private $testArray = ['a', 'b', 'c', 'd', 'e'];

    public function test_norm_explode(): void
    {
        $result = norm_explode($this->testString, 'm');
        $expected = [0 => 'abcdefghijkl', 1 => 'nopqrstuvwxyz'];
        $this->assertEquals($expected, $result);
    }

    public function test_norm_implode(): void
    {
        $result = norm_implode($this->testArray, '|');
        $this->assertEquals('a|b|c|d|e', $result);
    }

    public function test_norm_join(): void
    {
        $result = norm_join($this->testArray, '|');
        $this->assertEquals('a|b|c|d|e', $result);
    }
}

<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ArraysTest extends TestCase
{
    private $testString = 'abcdefghijklmnopqrstuvwxyz';

    private $testArray = ['a', 'b', 'c', 'd', 'e'];

    private $testEncodedString = 'text=Hello+G%C3%BCnter';

    public function test_norm_array_key_exists(): void
    {
        $result = norm_array_key_exists($this->testArray, 3);

        $this->assertEquals($this->testArray[$result], 'b');
        $this->assertEquals(true, $result);
    }

}

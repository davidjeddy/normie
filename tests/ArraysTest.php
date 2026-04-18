<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ArraysTest extends TestCase
{
    private $testArray = ['a', 'b', 'c', 'd', 'e'];

    private $testArray2 = [3, 5, 7, 9, 12];

    public function test_norm_array_key_exists(): void
    {
        $result = norm_array_key_exists($this->testArray, 3);

        $this->assertEquals($this->testArray[$result], 'b');
        $this->assertEquals(true, $result);
    }

    public function test_norm_array_map(): void
    {
        function square($x){ return($x * $x); }

        $b = array_map("square", $this->testArray2);
        $c = norm_array_map($this->testArray2, "square");

        $this->assertEquals($b, $c);
    }

    public function test_norm_array_search(): void
    {
        $result = norm_array_search($this->testArray, 'c');
        $result2 = array_search('c', $this->testArray);

        $this->assertEquals(2, $result);
        $this->assertEquals($result, $result2);
    }

    public function test_norm_in_array(): void
    {
        $result = norm_in_array($this->testArray, 'c');
        $result2 = in_array('c', $this->testArray);

        $this->assertEquals($result, $result2);
    }
}

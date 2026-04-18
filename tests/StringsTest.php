<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class StringsTest extends TestCase
{
    private $testStringABC = "abcdefghijklmnopqrstuvwxyz";

    public function testnorm_stristr(): void
    {
        $result = norm_stristr("nop", $this->testStringABC);
        $this->assertEquals($result, "nopqrstuvwxyz");
    }
}

<?php
use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
  public function testGetFullName()
  {
    $this->assertSame(3, Calc::Plus(1,2));
  }
}
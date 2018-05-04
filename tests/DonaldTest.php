<?php

namespace Test\Quote;

use PHPUnit\Framework\TestCase;
use Quote\Donald;

class DonaldTest extends TestCase {
  private $donald;

  public function setUp() {
    $this->donald = new Donald();
  }

  public function testSpeak() {
    $this->assertInternalType(
      'string',
      $this->donald->random()
    );

  }
}

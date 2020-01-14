<?php

use PHPUnit\Framework\TestCase;
// review of questions posted on slack channel 5 led me to applying autoloader to pull classes versus creating a 'use' statement for each
class ListingBasicTest extends TestCase
{
   //exception testing breakout


  /** @test */
  public function constructMustContainData()
  { //test for missing data set exception
     $this->expectException(Exception::class);
     $data[] = null;


        $listing = new ListingBasic($data);
  }
  /** @test */
  public function idMustBeSet()
  { //test for invalid ID exception
     $this->expectException(Exception::class);
     $data = [
            'id' => null,
            'title' => 'Random'
        ];

        $listing = new ListingBasic($data);
  }
  /** @test */
  public function titleMustBeSet()
  { //test for invalid title exception
     $this->expectException(Exception::class);
     $data = [
            'id' => 1,
            'title' => null
        ];

        $listing = new ListingBasic($data);
  }
}

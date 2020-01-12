<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
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

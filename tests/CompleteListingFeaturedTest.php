<?php
// referenced lesson on fixtures as well as fixture documentation (phpunit.readthedocs.io/en/8.0/fixtures.html)
use PHPUnit\Framework\TestCase;

class CompleteListingFeaturedTest extends TestCase
{
   protected $testData;
   protected $ListingFeatured;

   protected function setUp(): void
   {
       $this->testData = [
           'id' => 2,
           'title' => "A Featured Listing",
           'website' => "http://www.features.com",
           'email' => "featured_frita@features.com",
           'twitter' => "freaturedf_php",
           'status' => "Featured",
           'description' => "Featured  conference includes everything from Premium, but wait there's more!",
           'coc'=>'coc'
       ];


       $this->ListingFeatured = new ListingFeatured($this->testData);

  /* start tests below */
   }


  /** @test */
  public function hasStatus()
  { //test for status is 'Featured'
     $this->assertEquals(
         "Featured",
         $this->ListingFeatured->getStatus()
     );
  }

  /** @test */
  public function getCocResults()
  { //test for expected results
    $this->assertEquals($this->testData['coc'],$this->ListingFeatured->getCoc());
  }


}

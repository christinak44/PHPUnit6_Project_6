<?php
// referenced lesson on fixtures as well as fixture documentation (phpunit.readthedocs.io/en/8.0/fixtures.html)
use PHPUnit\Framework\TestCase;

class CompleteListingPremiumTest extends TestCase
{
   protected $testData;
   protected $ListingPremium;

   protected function setUp(): void
   {
       $this->testData = [
           'id' => 2,
           'title' => "A Premium Listing",
           'website' => "http://www.premiumplus.com",
           'email' => "premium_priti@premiumplus.com",
           'twitter' => "premiump_php",
           'status' => "Premium",
           'description' => "Premium plus package conference includes everything from Basic, but wait there's more!"
       ];


       $this->ListingPremium = new ListingPremium($this->testData);

  /* start tests below */
   }


  /** @test */
  public function hasStatus()
  { //test for status is 'Premium'
     $this->assertEquals(
         "Premium",
         $this->ListingPremium->getStatus()
     );
  }

  /** @test */
  public function getDescriptionResults()
  { //test for expected results
    $this->assertEquals($this->testData['description'],$this->ListingPremium->getDescription());
  }

  /** @test */
  public function AllowedTags()
  {
    $this->assertEquals(htmlspecialchars('<p><br><b><strong><em><u><ol><ul><li>'),$this->ListingPremium->displayAllowedTags());
  }
}

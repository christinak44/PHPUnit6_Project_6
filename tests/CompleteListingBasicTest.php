<?php
// referenced lesson on fixtures as well as fixture documentation (phpunit.readthedocs.io/en/8.0/fixtures.html)
use PHPUnit\Framework\TestCase;

class CompleteListingBasicTest extends TestCase
{
   protected $ListingBasic;

   protected function setUp(): void
   {
       $this->ListingBasic = new ListingBasic();

       $this->ListingBasic->setId(1);
       $this->ListingBasic->setTitle("A Basic Listing");
       $this->ListingBasic->setWebsite("www.basically.com");
       $this->ListingBasic->setEmail("basic_bob@basically.com");
       $this->ListingBasic->setTwitter("basic_php");
       $this->ListingBasic->setStatus("Basic");
       
  /* start tests below */
   }


  /** @test */
  public function testEmpty()
  { //check that object not empty
     $this->assertTrue(!empty($this->ListingBasic));
  }
  /** @test */
  public function hasId()
  { //test for get method 'ID' ok
     $this->assertEquals(
         1,
         $this->ListingBasic->getId()
     );
  }

  /** @test */
  public function hasTitle()
  { //test for get method 'Title' ok
     $this->assertEquals(
         "A Basic Listing",
         $this->ListingBasic->getTitle()
     );
  }

  /** @test */
  public function hasWebsite()
  { //test for get method 'Website' ok
     $this->assertEquals(
         "www.basically.com",
         $this->ListingBasic->getWebsite()
     );
  }

  /** @test */
  public function hasEmail()
  { //test for get method 'Email' ok
     $this->assertEquals(
         "basic_bob@basically.com",
         $this->ListingBasic->getEmail()
     );
  }

  /** @test */
  public function hasTwitter()
  { //test for get method 'Twitter' ok
     $this->assertEquals(
         "basic_php",
         $this->ListingBasic->getTwitter()
     );
  }

  /** @test */
  public function hasStatus()
  { //test for status is 'Basic'
     $this->assertEquals(
         "Basic",
         $this->ListingBasic->getStatus()
     );
  }

  /** @test */
  public function dataInArray()
  { //test for toArray method ensure all items has value
    $this->assertEquals($this->BasicListing->toArray());
  }

  /** @test */
  public function objectCreated()
  {
    $this->assertInstanceOf(
        ListingBasic::class,
        $this->BasicListing
    );
  }
}

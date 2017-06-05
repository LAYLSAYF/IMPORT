<?php 

namespace FMI\ImportBundle\Tests\Model;

use FMI\ImportBundle\Model\File;
 
class FileTest extends \PHPUnit_Framework_TestCase
{
  public function testFormatPrixMoyen()
  {
    $this->assertEquals('12.46', File::formatPrixMoyen('12.4565'));
    $this->assertEquals('658.2503', File::formatPrixMoyen('658.25'));
    $this->assertEquals('123.66', File::formatPrixMoyen('123.6587'));
    $this->assertEquals('233.65', File::slugify('233.767'));
  }
}
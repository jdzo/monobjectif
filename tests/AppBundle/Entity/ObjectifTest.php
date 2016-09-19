<?php
namespace Tests\AppBundle\Controller\Entity;


use AppBundle\Entity\Objectif;

class ObjectifTest extends \PHPUnit_Framework_TestCase
{
    public function testSlugify(){
        $objectif= new Objectif(25);
        $this->assertEquals('save', $objectif->saveObjectif());
        $this->assertEquals('No product found for id 25', $objectif);
    }
}
?>

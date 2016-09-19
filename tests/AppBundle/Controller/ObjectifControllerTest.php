<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use AppBundle\Entity\Objectif;
use AppBundle\Controller\ObjectifController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ObjectifControllerTest extends WebTestCase     
{
    public function testIndex()      {
       $repository = new ObjectifController()::getDoctrine();
        
        die();
        $objectif = $repository->find(5);
        if (!$objectif) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }
        return $objectif;
    }
}

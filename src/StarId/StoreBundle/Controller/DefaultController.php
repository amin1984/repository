<?php

namespace StarId\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use StarId\StoreBundle\Document\Product;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    /**
     * @Route("/")
     */
    public function indexAction() 
    {
        return $this->render('StarIdStoreBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/create")
     */

    public function createAction() 
    {
        $product = new Product();
        $product->setName('A Foo Car');
        $product->setPrice('20');

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($product);
        $dm->flush();

        return new Response('Created product id ' . $product->getId());
    }

}

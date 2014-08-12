<?php

namespace Sifast\PfeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use JMS\Serializer\Exception\RuntimeException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\View as RestView;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends FOSRestController {

    /**
     * @return Response 
     */
    public function indexAction() {
//        echo $is; die;
        $router = $this->get("router");
        $route = $router->match($this->getRequest()->getPathInfo());


        $currentUrl = $this->getRequest()->getUri();

        $s = explode("/", $currentUrl);
       // echo "<pre>";        print_r($s);
        
        $id = $s[9];

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SifastPfeBundle:Produit');
         $produit = $repository->findBy(array("type" => $id));
        //$produit = $repository->find($id);

        $view = View::create()
                ->setStatusCode(200)
                ->setData($produit);

        return $this->get('fos_rest.view_handler')->handle($view);
    }

    /**
     * @return Response 
     */
    public function showAction() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SifastPfeBundle:Produit');

        $produit = $repository->findBy(array("id" => 2));

        $view = View::create()
                ->setStatusCode(200)
                ->setData($produit);

        return $this->get('fos_rest.view_handler')->handle($view);
    }

}

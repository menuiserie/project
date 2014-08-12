<?php

namespace Sifast\PfeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method AS HttpMethod;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Jouve\AppBundle\Form\Type\SearchType;
use Jouve\AppBundle\Form\Type\SendToFriendType;
use Jouve\AppBundle\Form\Handler\SearchHandler;
use Jouve\AppBundle\Form\Handler\SendToFriendHandler;
use Symfony\Component\HttpFoundation\Request;
use Jouve\AppBundle\Libraries\Utilities;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;
use Sifast\PfeBundle\Entity\Devis;

class HomeController extends Controller {

    public function indexAction() {

        return $this->render('SifastPfeBundle:home:index.html.twig');
    }
    
     public function enregistrerAction() {
         echo 'ok';die;
         $filteredData->substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
         $unencodedData->base64_decode($filteredData);
         file_put_contents('img.png', $unencodedData);
         echo '<img src="'.$_POST['img_val'].'" />';
         

        return $this->render('SifastPfeBundle:home:index.html.twig');
    }

    
    public function ajoutAction() {
        $devis = new Devis();

        $devis->setMail($_POST['mail_clt']);
        $devis->setType($_POST['type_p']);
        $devis->setSousType($_POST['ss_type_p']);
        $devis->setModele($_POST['modele_p']);
        $devis->setLongeur($_POST['longeur']);
        $devis->setLargeur($_POST['largeur']);
        $devis->setCouleur($_POST['couleur']);
        $devis->setImage($_POST['couleur']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($devis);
        $em->flush();
        return new Response('Id du produit créé : ' . $devis->getId());
    }

    public function aluAction() {

        //valeur dans parametre.yml
        $website = $this->container->getParameter('httpval');

        // apporter les portes de type Moderne 

        $restUrl = $website . '/web/app_dev.php/api/produit/Moderne/aluminium/index.json'; // Your target url on remote server

        $method = 'get'; // Type of request you want to issue to remote server
        $params = ''; // Parameters you are sending to remote server
        // Initialize curl handle
        $ch = curl_init();

        // Set request url
        curl_setopt($ch, CURLOPT_URL, $restUrl);

        // TRUE to include the header in the output.
        curl_setopt($ch, CURLOPT_HEADER, false);

        // A custom request method to use instead of "GET" or "HEAD" when doing a HTTP request.  
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if ($params != null) {
            // The full data to post in a HTTP "POST" operation.
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $response = curl_exec($ch);
        curl_close($ch);
        $images = json_decode($response);



//appel 2 liste des photos portes pour page alu //
        // apporter les portes de type Classique 

        $restUrl2 = $website . '/web/app_dev.php/api/produit/Classique/aluminium/index.json'; // Your target url on remote server
        $method2 = 'get'; // Type of request you want to issue to remote server
        $params2 = ''; // Parameters you are sending to remote server
        // Initialize curl handle
        $ch2 = curl_init();

        // Set request url
        curl_setopt($ch2, CURLOPT_URL, $restUrl2);

        // TRUE to include the header in the output.
        curl_setopt($ch2, CURLOPT_HEADER, false);

        // A custom request method to use instead of "GET" or "HEAD" when doing a HTTP request.  
        curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, $method2);
        if ($params2 != null) {
            // The full data to post in a HTTP "POST" operation.
            curl_setopt($ch2, CURLOPT_POSTFIELDS, http_build_query($params2));
        }
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);

        $response2 = curl_exec($ch2);
        curl_close($ch2);
        $images2 = json_decode($response2);


        return $this->render('SifastPfeBundle:home:alu.html.twig', array('images' => $images, 'images2' => $images2));
    }

    public function pvcAction() {


        //valeur dans parametre.yml
        $website = $this->container->getParameter('httpval');

        // apporter les portes de type Moderne 

        $restUrl = $website . '/web/app_dev.php/api/produit/Moderne/pvc/index.json';
        $method = 'get';
        $params = '';
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $restUrl);

        curl_setopt($ch, CURLOPT_HEADER, false);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if ($params != null) {

            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $response = curl_exec($ch);
        curl_close($ch);
        $images = json_decode($response);

//appel 2 liste des photos portes pour page pvc //

        $restUrl2 = $website . '/web/app_dev.php/api/produit/Classique/pvc/index.json';
        $method2 = 'get';
        $params2 = '';
        $ch2 = curl_init();

        curl_setopt($ch2, CURLOPT_URL, $restUrl2);

        curl_setopt($ch2, CURLOPT_HEADER, false);

        curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, $method2);
        if ($params2 != null) {
            curl_setopt($ch2, CURLOPT_POSTFIELDS, http_build_query($params2));
        }
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);

        $response2 = curl_exec($ch2);
        curl_close($ch2);
        $images2 = json_decode($response2);


        return $this->render('SifastPfeBundle:home:pvc.html.twig', array('images' => $images, 'images2' => $images2));
    }

    public function configAction() {
        //valeur envoyé par la liste des images cliqué dans page alu ou pvc qui se trouve dans le chemin @
        $val = $_REQUEST['conf'];
        $website = $this->container->getParameter('httpval');
        if ($val == 1) {
            $restUrl = $website . '/web/app_dev.php/api/produit/Moderne/aluminium/index.json';
        }
        if ($val == 2) {
            $restUrl = $website . '/web/app_dev.php/api/produit/Classique/aluminium/index.json';
        }
        if ($val == 3) {
            $restUrl = $website . '/web/app_dev.php/api/produit/Moderne/pvc/index.json';
        }
        if ($val == 4) {
            $restUrl = $website . '/web/app_dev.php/api/produit/Classique/pvc/index.json';
        }
        $method = 'get';
        $params = '';
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $restUrl);

        curl_setopt($ch, CURLOPT_HEADER, false);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if ($params != null) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $response = curl_exec($ch);
        curl_close($ch);
        $images = json_decode($response);


        return $this->render('SifastPfeBundle:home:configurateur.html.twig', array('images' => $images, 'val' => $val));
    }

    public function buildManifestAction() {

        $response = new Response();
        $response->headers->set('Content-Type', 'text/cache-manifest');
        $response->sendHeaders();

        return $this->render('SifastPfeBundle:home:manifest.txt.twig', array($response));
    }

}

?>
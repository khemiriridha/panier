<?php

namespace PanierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
 
class DefaultController extends Controller
{
     /**
     * @Route("/panier", name="panier")
     */
    public function indexAction()
    {
		//suivre ce tutoriel 
		// remplir le panier 
		//https://gilsrc.wordpress.com/2011/06/10/un-preexecute-pour-votre-controller-via-des-listeners/
        return $this->render('PanierBundle:Default:index.html.twig');
    }
}

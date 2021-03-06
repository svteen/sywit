<?php

namespace Sywit\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        //return array('name' => $name);
        $name = "Default";

        return $this->render('SywitWebBundle:Default:index.html.twig', array(
            'name' => $name
        ));
    }
}

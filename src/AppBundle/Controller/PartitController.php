<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PartitController extends Controller
{
    /**
     * @Route("/addPartit")
     */
    public function addPartitAction()
    {
        return $this->render('AppBundle:Partit:add_partit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/updatePartit")
     */
    public function updatePartitAction()
    {
        return $this->render('AppBundle:Partit:update_partit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deletePartit")
     */
    public function deletePartitAction()
    {
        return $this->render('AppBundle:Partit:delete_partit.html.twig', array(
            // ...
        ));
    }

}

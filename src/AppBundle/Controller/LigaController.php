<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LigaController extends Controller
{
    /**
     * @Route("/listLigas")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Liga:listLigas.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/listTemporadas")
     */
    public function listTemporadasAction()
    {
        return $this->render('AppBundle:Liga:listTemporadas.html.twig', array(
            // ...
        ));
    }

}

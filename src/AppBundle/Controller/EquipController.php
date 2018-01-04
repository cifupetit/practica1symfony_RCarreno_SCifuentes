<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EquipController extends Controller
{
    /**
     * @Route("/llistarTotEquip")
     */
    public function llistarTotEquipAction()
    {
        return $this->render('AppBundle:Equip:llistar_tot_equip.html.twig', array(
            // ...
        ));
    }

}

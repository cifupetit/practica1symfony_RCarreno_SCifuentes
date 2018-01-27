<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\Partit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


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

    /**
     * @Route("/listCompeticiones",name="competiciones")
     */
    public function listCompeticiones()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT DISTINCT p.competicio
            FROM AppBundle:Partit p');
        $partits = $query->getResult();

        return $this->render('AppBundle:Partit:listCompeticiones.html.twig', array('partits'=>$partits));
    }

    /**
     * @Route("/listTemporadas/{competicio}",name="temporadas")
     */
    public function listTemporadasAction($competicio)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT DISTINCT p.competicio, p.temporada
            FROM AppBundle:Partit p
            WHERE p.competicio LIKE :competicio'
        )->setParameter('competicio', $competicio);
        $partits = $query->getResult();

        return $this->render('AppBundle:Partit:listTemporadas.html.twig', array('partits'=>$partits, 'comp'=>$competicio));
    }

    /**
     * @Route("/listPartidos/{competicio}/{temporada}",name="partidos")
     */
    public function listPartidosAction($competicio, $temporada)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:Partit p 
            WHERE p.competicio LIKE :competicio 
            AND p.temporada = :temporada'
        )->setParameter('competicio', $competicio);
        $query->setParameter('temporada', $temporada);
        $partits = $query->getResult();

        return $this->render('AppBundle:Partit:listPartidos.html.twig', array(
		'partits'=>$partits,'comp'=>$competicio,'temp'=>$temporada
		));
    }

}

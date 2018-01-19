<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\Partit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Equip;


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
        /*'SELECT p, (SELECT eqL.nom_equip FROM AppBundle:Equip eqL WHERE eqL.id = p.IDequip_local), (SELECT eqV.nom_equip FROM AppBundle:Equip eqV WHERE eqV.id = p.IDequip_visitant)
            FROM AppBundle:Partit p, AppBundle:Equip e 
            WHERE p.competicio LIKE :competicio 
            AND p.temporada = :temporada
            GROUP BY p.id'*/

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

    /**
     * @Route("/listPartidosDeEquipoForm",name="partidosDeEquipoForm")
     */
    public function listPartidosDeEquipoFormAction(Request $request)
    {
        $equip = new Equip();
        $equip->setNomEquip('Escribe el nombre de equipo');

        $form = $this->createFormBuilder($equip)
            ->add('nomEquip', TextType::class)
            ->add('busca', SubmitType::class, array('label' => 'Buscar partidos'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $equip = $form->getData();

            $equip = new Equip();
            $equip->setNomEquip($form->get('nomEquip')->getData());

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
            'SELECT e.id FROM AppBundle:Equip e 
            WHERE e.nomEquip = :equip'
            )->setParameter('equip', $equip->getNomEquip());
            $idEquip = $query->getResult();

            //return $this->redirectToRoute('partidosDeEquipo', {'idEquip' : nomEquipForm});
            return $this->redirectToRoute('partidosDeEquipo', array('equip' => $idEquip));
        }

        return $this->render('AppBundle:Partit:listPartidosDeEquipoForm.html.twig', array(
        'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/listPartidosDeEquipo/{equip}",name="partidosDeEquipo")
     */
    public function listPartidosDeEquipoAction($equip)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:Partit p 
            WHERE p.iDequipLocal = :equip 
            OR p.iDequipVisitant = :equip'
        )->setParameter('equip', $equip);
        $partits = $query->getResult();

        $queryX = $em->createQuery(
            'SELECT e.nomEquip FROM AppBundle:Equip e 
            WHERE e.id = :equip'
        )->setParameter('equip', $equip);
        $nomEquip = $queryX->getResult();
        var_dump($nomEquip);

        return $this->render('AppBundle:Partit:listPartidosDeEquipo.html.twig', array(
        'partits'=>$partits, 'nomEquip'=>$nomEquip
        ));
    }

}
